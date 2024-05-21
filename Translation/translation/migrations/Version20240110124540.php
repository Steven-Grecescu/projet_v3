<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240110124540 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE adapterContent_webContent (adapterContent_id INT NOT NULL, webContent_id INT NOT NULL, INDEX IDX_CFA4AEC885F3AFCD (adapterContent_id), UNIQUE INDEX UNIQ_CFA4AEC858CDC0F4 (webContent_id), PRIMARY KEY(adapterContent_id, webContent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE adapterContent_webContent ADD CONSTRAINT FK_CFA4AEC885F3AFCD FOREIGN KEY (adapterContent_id) REFERENCES adapter_content (id)');
        $this->addSql('ALTER TABLE adapterContent_webContent ADD CONSTRAINT FK_CFA4AEC858CDC0F4 FOREIGN KEY (webContent_id) REFERENCES web_content (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE adapterContent_webContent DROP FOREIGN KEY FK_CFA4AEC885F3AFCD');
        $this->addSql('ALTER TABLE adapterContent_webContent DROP FOREIGN KEY FK_CFA4AEC858CDC0F4');
        $this->addSql('DROP TABLE adapterContent_webContent');
    }
}
