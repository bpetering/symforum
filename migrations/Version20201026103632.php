<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201026103632 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('
            INSERT INTO "thread" (id, subforum_id, topic, author_id)
            VALUES
            (5, 1, \'PHP needs to be a functional language?\', 2),
            (6, 3, \'Javascript: the bad parts\', 3),
            (7, 2, \'The Python subforum needs moderation\', 3),
            (8, 4, \'New APIs coming in 2021\', 4)
            ;
        ');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
    }
}
