<?php

class QueryBuilder
{

    /**
     * @var mixed
     */
    protected $pdo;
    /**
     * @param $pdo
     */
    public function __construct($pdo)
    {

        $this->pdo = $pdo;

    }
    /**
     * @param $table
     */
    public function selectAll($table)
    {

        $statment = $this->pdo->prepare("SELECT * FROM {$table}");

        $statment->execute();

        return $statment->fetchAll();
    }
    /**
     * @param $table
     * @param $data
     */
    public function insert($table, $data)
    {

        try {

            $keys   = implode(',', array_keys($data));
            $values = ':' . implode(', :', array_keys($data));

            $sql = sprintf('insert into %s (%s) values(%s) ', $table, $keys, $values);

            $statment = $this->pdo->prepare($sql);

            return $statment->execute($data);
        } catch (\Exception $e) {

            var_dump($e);
        }

    }
}
