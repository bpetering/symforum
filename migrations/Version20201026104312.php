<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201026104312 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE "user" ADD username VARCHAR(255);');
        $this->addSql('UPDATE "user" SET username=\'admin\' where id=1;');
        $this->addSql('UPDATE "user" SET username=\'bob\' where id=2;');
        $this->addSql('UPDATE "user" SET username=\'alice\' where id=3;');
        $this->addSql('UPDATE "user" SET username=\'mallory\' where id=4;');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE "user" DROP username');
    }
}
