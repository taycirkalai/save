<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221208105538 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE testtt (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE restaurateurs ADD restaurant_id INT NOT NULL');
        $this->addSql('ALTER TABLE restaurateurs ADD CONSTRAINT FK_6C2D42DCB1E7706E FOREIGN KEY (restaurant_id) REFERENCES restau (id)');
        $this->addSql('CREATE INDEX IDX_6C2D42DCB1E7706E ON restaurateurs (restaurant_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE test');
        $this->addSql('DROP TABLE testtt');
        $this->addSql('ALTER TABLE restaurateurs DROP FOREIGN KEY FK_6C2D42DCB1E7706E');
        $this->addSql('DROP INDEX IDX_6C2D42DCB1E7706E ON restaurateurs');
        $this->addSql('ALTER TABLE restaurateurs DROP restaurant_id');
    }
}
