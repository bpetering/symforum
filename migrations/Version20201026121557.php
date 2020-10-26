<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201026121557 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE "user" ALTER username SET NOT NULL');

        // previous migrations didn't respect this
        $this->addSql('alter sequence post_id_seq restart with 100;');
        $this->addSql('alter sequence subforum_id_seq restart with 100;');
        $this->addSql('alter sequence thread_id_seq restart with 100;');
        $this->addSql('alter sequence user_id_seq restart with 100;');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE "user" ALTER username DROP NOT NULL');
    }
}
