<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201026101719 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('
            INSERT INTO "thread" (id, subforum_id, topic)
            VALUES
            (1, 1, \'Should PHP be a compiled language?\'),
            (2, 3, \'New things to expect in ES2029\'),
            (3, 2, \'SSSSSSsssssssSSSSSSSss\'),
            (4, 4, \'Symfony and the mobile web\')
            ;
        ');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
    }
}
