<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211127150941 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE app_users (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username VARCHAR(25) NOT NULL, password VARCHAR(64) NOT NULL, email VARCHAR(254) NOT NULL, is_active BOOLEAN NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C2502824F85E0677 ON app_users (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C2502824E7927C74 ON app_users (email)');
        $this->addSql('DROP TABLE user');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL COLLATE BINARY, last_name VARCHAR(255) NOT NULL COLLATE BINARY, email VARCHAR(255) NOT NULL COLLATE BINARY, password VARCHAR(255) NOT NULL COLLATE BINARY)');
        $this->addSql('DROP TABLE app_users');
    }
}
