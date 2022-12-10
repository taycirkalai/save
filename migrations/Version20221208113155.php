<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221208113155 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE restau ADD restaurant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE restau ADD CONSTRAINT FK_D001E5FFB1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurateurs (id)');
        $this->addSql('CREATE INDEX IDX_D001E5FFB1E7706E ON restau (restaurant_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE restau DROP FOREIGN KEY FK_D001E5FFB1E7706E');
        $this->addSql('DROP INDEX IDX_D001E5FFB1E7706E ON restau');
        $this->addSql('ALTER TABLE restau DROP restaurant_id');
    }
}
