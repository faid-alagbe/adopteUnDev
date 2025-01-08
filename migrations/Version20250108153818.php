<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250108153818 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE postes_langages (postes_id INT NOT NULL, langages_id INT NOT NULL, INDEX IDX_164F0766E30A0B60 (postes_id), INDEX IDX_164F0766C88BBA17 (langages_id), PRIMARY KEY(postes_id, langages_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE postes_langages ADD CONSTRAINT FK_164F0766E30A0B60 FOREIGN KEY (postes_id) REFERENCES postes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE postes_langages ADD CONSTRAINT FK_164F0766C88BBA17 FOREIGN KEY (langages_id) REFERENCES langages (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE poste_entity DROP FOREIGN KEY FK_DEFE5B6DA76ED395');
        $this->addSql('DROP TABLE postes_technologies');
        $this->addSql('DROP TABLE poste_entity');
        $this->addSql('ALTER TABLE langages DROP FOREIGN KEY FK_C9CF1A1CE30A0B60');
        $this->addSql('ALTER TABLE langages DROP FOREIGN KEY FK_C9CF1A1C76DFA87B');
        $this->addSql('DROP INDEX IDX_C9CF1A1C76DFA87B ON langages');
        $this->addSql('DROP INDEX IDX_C9CF1A1CE30A0B60 ON langages');
        $this->addSql('ALTER TABLE langages DROP profils_dev_id, DROP postes_id');
        $this->addSql('ALTER TABLE profils_dev_langages MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON profils_dev_langages');
        $this->addSql('ALTER TABLE profils_dev_langages DROP id, CHANGE profil_id profils_dev_id INT NOT NULL');
        $this->addSql('ALTER TABLE profils_dev_langages ADD CONSTRAINT FK_A28B23C876DFA87B FOREIGN KEY (profils_dev_id) REFERENCES profils_dev (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE profils_dev_langages ADD CONSTRAINT FK_A28B23C8C88BBA17 FOREIGN KEY (langages_id) REFERENCES langages (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_A28B23C876DFA87B ON profils_dev_langages (profils_dev_id)');
        $this->addSql('CREATE INDEX IDX_A28B23C8C88BBA17 ON profils_dev_langages (langages_id)');
        $this->addSql('ALTER TABLE profils_dev_langages ADD PRIMARY KEY (profils_dev_id, langages_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE postes_technologies (id INT AUTO_INCREMENT NOT NULL, poste_id INT NOT NULL, langages_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE poste_entity (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, location VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, experience_require INT NOT NULL, salary NUMERIC(2, 0) NOT NULL, description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_DEFE5B6DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE poste_entity ADD CONSTRAINT FK_DEFE5B6DA76ED395 FOREIGN KEY (user_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE postes_langages DROP FOREIGN KEY FK_164F0766E30A0B60');
        $this->addSql('ALTER TABLE postes_langages DROP FOREIGN KEY FK_164F0766C88BBA17');
        $this->addSql('DROP TABLE postes_langages');
        $this->addSql('ALTER TABLE langages ADD profils_dev_id INT DEFAULT NULL, ADD postes_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE langages ADD CONSTRAINT FK_C9CF1A1CE30A0B60 FOREIGN KEY (postes_id) REFERENCES postes (id)');
        $this->addSql('ALTER TABLE langages ADD CONSTRAINT FK_C9CF1A1C76DFA87B FOREIGN KEY (profils_dev_id) REFERENCES profils_dev (id)');
        $this->addSql('CREATE INDEX IDX_C9CF1A1C76DFA87B ON langages (profils_dev_id)');
        $this->addSql('CREATE INDEX IDX_C9CF1A1CE30A0B60 ON langages (postes_id)');
        $this->addSql('ALTER TABLE profils_dev_langages DROP FOREIGN KEY FK_A28B23C876DFA87B');
        $this->addSql('ALTER TABLE profils_dev_langages DROP FOREIGN KEY FK_A28B23C8C88BBA17');
        $this->addSql('DROP INDEX IDX_A28B23C876DFA87B ON profils_dev_langages');
        $this->addSql('DROP INDEX IDX_A28B23C8C88BBA17 ON profils_dev_langages');
        $this->addSql('ALTER TABLE profils_dev_langages ADD id INT AUTO_INCREMENT NOT NULL, CHANGE profils_dev_id profil_id INT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }
}
