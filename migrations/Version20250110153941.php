<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250110153941 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE company_crters_langages (company_crters_id INT NOT NULL, langages_id INT NOT NULL, INDEX IDX_B0EAF2997D0F7FFC (company_crters_id), INDEX IDX_B0EAF299C88BBA17 (langages_id), PRIMARY KEY(company_crters_id, langages_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE company_crters_langages ADD CONSTRAINT FK_B0EAF2997D0F7FFC FOREIGN KEY (company_crters_id) REFERENCES company_crters (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE company_crters_langages ADD CONSTRAINT FK_B0EAF299C88BBA17 FOREIGN KEY (langages_id) REFERENCES langages (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE company_crters_langages DROP FOREIGN KEY FK_B0EAF2997D0F7FFC');
        $this->addSql('ALTER TABLE company_crters_langages DROP FOREIGN KEY FK_B0EAF299C88BBA17');
        $this->addSql('DROP TABLE company_crters_langages');
    }
}
