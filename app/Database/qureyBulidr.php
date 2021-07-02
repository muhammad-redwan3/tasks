<?php

namespace App\Database;


class qureyBulider
{

    private static $pdo;
    private static $log;


    // تقوم هذه الدالة بإيصال الاتصال من كلاس الاتصال إلى كلاس الأوامر لكي يتم إجراء عمليات على الداتا
    public static function make(\PDO $pdo, $log = null)
    {
        self::$pdo = $pdo;
        self::$log = $log;
    }

    public static function get($table, $where = null)
    {
        $qurey = "SELECT * from {$table}";

        if (is_array($where)) {
            $qurey .= " WHERE " . implode(' ', $where);
        }
        $satatement = self::execute($qurey);
        //  self::$pdo->prepare($qurey);
        // $satatement->execute();
        return $satatement->fetchAll(\PDO::FETCH_OBJ);
    }

    public static function insert($table, $date)
    {

        $filed = array_keys($date);
        $fildeStr = implode(',', $filed);
        $valueStr = str_repeat('?,', count($filed) - 1) . '?';
        $qurey = "INSERT INTO {$table}({$fildeStr}) VALUE ({$valueStr})";
        // $satatement = self::$pdo->prepare($qurey);
        // $satatement->execute(array_values($date));

        self::execute($qurey, array_values($date));
    }

    public static function updata($table, $id, $date)
    {
        $fields = implode('= ?,', array_keys($date)) . '= ?';
        $values = array_values($date);
        $qurey = "UPDATE {$table} SET {$fields} WHERE id= {$id}";
        // $satatement = self::$pdo->prepare($qurey);
        // $satatement->execute($values);

        self::execute($qurey, $values);
    }

    public static function delete($table, $id, $colum = 'id', $operator = '=')
    {

        $qurey = "DELETE FROM {$table} WHERE {$colum} {$operator} {$id} ";
        // $satatement = self::$pdo->prepare($qurey);
        // $satatement->execute();

        self::execute($qurey);
    }


    private static function execute($qurey, $values = [])
    {
        if (self::$log) {
            self::$log->info($qurey);
        }
        $satatement = self::$pdo->prepare($qurey);
        $satatement->execute($values);
        return $satatement;
    }
}
