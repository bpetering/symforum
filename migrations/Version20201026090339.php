<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201026090339 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        
        $this->addSql('
            INSERT INTO "user" (id, email, roles, password)
            VALUES (1, \'admin@example.com\', \'["ROLE_ADMIN"]\', \'$argon2id$v=19$m=65536,t=4,p=1$+sBTSPP/G9m93jeAEByD2g$J0gIEpZcBLzvn0qOz8hfCx6L3TxiGQN0rrfsmNTVQz4\'),
                    (2, \'bob@example.com\', \'["ROLE_USER"]\', \'$argon2id$v=19$m=65536,t=4,p=1$86LE73vtXmg8gRC2YpS+yQ$BhtLexy5O4bjp1HlUt/KrpN/QoQ27y4t3QNNpwHSYTU\'),
                    (3, \'alice@example.com\', \'["ROLE_USER"]\', \'$argon2id$v=19$m=65536,t=4,p=1$gTIHWJwgDtog9+eiDMWXUQ$Sos+K8nBjgSl0I/O7n88GrDonVS5qq5qexwISMe/tcQ\'),
                    (4, \'mallory@example.com\', \'["ROLE_USER"]\', \'$argon2id$v=19$m=65536,t=4,p=1$gTIHWJwgDtog9+eiDMWXUQ$Sos+K8nBjgSl0I/O7n88GrDonVS5qq5qexwISMe/tcQ\')
            ;
        ');

    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
    }
}
