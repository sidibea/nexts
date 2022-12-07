<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221120192015 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE forum CHANGE description description LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE podcast ADD published_by_id INT DEFAULT NULL, ADD fichier VARCHAR(255) NOT NULL, ADD created_at DATETIME NOT NULL, ADD updated_at DATETIME NOT NULL, ADD is_enabled TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE podcast ADD CONSTRAINT FK_D7E805BD5B075477 FOREIGN KEY (published_by_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_D7E805BD5B075477 ON podcast (published_by_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE forum CHANGE description description TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE podcast DROP FOREIGN KEY FK_D7E805BD5B075477');
        $this->addSql('DROP INDEX IDX_D7E805BD5B075477 ON podcast');
        $this->addSql('ALTER TABLE podcast DROP published_by_id, DROP fichier, DROP created_at, DROP updated_at, DROP is_enabled');
    }
}
