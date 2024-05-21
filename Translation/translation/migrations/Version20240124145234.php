<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240124145234 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category ADD adaptercontent_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C1CAAEAC1D FOREIGN KEY (adaptercontent_id) REFERENCES adapter_content (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_64C19C1CAAEAC1D ON category (adaptercontent_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C1CAAEAC1D');
        $this->addSql('DROP INDEX UNIQ_64C19C1CAAEAC1D ON category');
        $this->addSql('ALTER TABLE category DROP adaptercontent_id');
    }
}
