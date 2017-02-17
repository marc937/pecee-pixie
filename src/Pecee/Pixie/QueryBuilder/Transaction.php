<?php
namespace Pecee\Pixie\QueryBuilder;

class Transaction extends QueryBuilderHandler
{

    /**
     * Commit the database changes
     * @throws TransactionCommitHaltException
     */
    public function commit()
    {
        $this->pdo->commit();
        throw new TransactionCommitHaltException();
    }

    /**
     * Rollback the database changes
     * @throws TransactionRollbackHaltException
     */
    public function rollback()
    {
        $this->pdo->rollBack();
        throw new TransactionRollbackHaltException();
    }
}
