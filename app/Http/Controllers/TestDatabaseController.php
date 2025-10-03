<?php

namespace App\Http\Controllers;

use App\Services\DatabaseConnection;

class TestDatabaseController extends Controller
{

    public function testConnection()
    {
        try {
            $db = DatabaseConnection::getInstance();
            $pdo = $db->getConnection();
            
            // Usar comillas invertidas o cambiar el nombre del alias
            $stmt = $pdo->query("SELECT DATABASE() as db_name, NOW() as tiempo_actual");
            $result = $stmt->fetch();
            
            return response()->json([
                'status' => 'success',
                'message' => 'Conexión exitosa',
                'data' => $result
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function testSingleton()
    {
        $db1 = DatabaseConnection::getInstance();
        $db2 = DatabaseConnection::getInstance();
        
        return response()->json([
            'is_singleton' => $db1 === $db2,
            'message' => $db1 === $db2 ? 'Es Singleton' : 'No es Singleton'
        ]);
    }
}