<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201026111828 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // add some posts
        $this->addSql('
            INSERT INTO "post" (id, thread_id, text, time, author_id)
            VALUES
            (1, 2, \'ES2029 is bringing GPT-3 functionality, so you can do nothing and your code gets written for you\', \'2020-10-26 00:10:10\', 3),
            (2, 3, \'this thread is off-topic\', \'2020-10-26 00:10:10\', 1),
            (3, 7, \'the Python subforum needs a new moderator - any takers?\', \'2020-10-25 09:10:10\', 1),
            (4, 1, \'I love PHP but find it very sloooowwwww
            
            why isnt it a compiled language?\', \'2020-10-25 15:15:10\', 2),
            (5, 4, \'Can anyone post a brief tutorial about Symfony and responsive websites...

            It would be useful

            Thanks\', \'2020-09-12 17:02:20\', 4)
            ;
        ');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE "user" ALTER username DROP NOT NULL');
    }
}
