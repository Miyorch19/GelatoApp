<?php

namespace App\Http\Controllers;

use App\Builders\UserBuilder;
use App\Services\DatabaseConnection;

class UserBuilderController extends Controller
{
    public function crearUsuario()
    {
        try {
            $builder = new UserBuilder();
            $usuario = $builder
                ->setName('Juan Pérez')
                ->setEmail('juan@gelato.com')
                ->setPassword('password123')
                ->build();
            
            $db = DatabaseConnection::getInstance()->getConnection();
            
            $stmt = $db->prepare("
                INSERT INTO users (name, email, password, created_at, updated_at) 
                VALUES (?, ?, ?, NOW(), NOW())
            ");
            
            $stmt->execute([
                $usuario->getName(),
                $usuario->getEmail(),
                $usuario->getPassword()
            ]);
            
            $userId = $db->lastInsertId();
            
            return response()->json([
                'status' => 'success',
                'message' => 'Usuario creado exitosamente',
                'user_id' => $userId,
                'data' => $usuario->toArray()
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function listarUsuarios()
    {
        try {
            $db = DatabaseConnection::getInstance()->getConnection();
            
            $stmt = $db->query("SELECT id, name, email, created_at FROM users");
            $usuarios = $stmt->fetchAll();
            
            return response()->json([
                'status' => 'success',
                'total' => count($usuarios),
                'data' => $usuarios
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}