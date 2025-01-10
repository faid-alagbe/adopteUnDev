<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250110000906 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE company (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, nom VARCHAR(255) NOT NULL, location VARCHAR(255) NOT NULL, logo VARCHAR(255) DEFAULT NULL, presentation VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_4FBF094FA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evaluations (id INT AUTO_INCREMENT NOT NULL, developpeur_id INT NOT NULL, note SMALLINT NOT NULL, commentaire LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE favoris (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, cible_id INT NOT NULL, type VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE langages (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_C9CF1A1C6C6E55B5 (nom), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messages (id INT AUTO_INCREMENT NOT NULL, expediteur_id INT NOT NULL, destinataire_id INT NOT NULL, contenu LONGTEXT NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE postes (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, titre VARCHAR(255) NOT NULL, localisation VARCHAR(255) DEFAULT NULL, experience_requise SMALLINT NOT NULL, salaire NUMERIC(10, 2) DEFAULT NULL, description LONGTEXT DEFAULT NULL, INDEX IDX_5A763C64A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE postes_langages (postes_id INT NOT NULL, langages_id INT NOT NULL, INDEX IDX_164F0766E30A0B60 (postes_id), INDEX IDX_164F0766C88BBA17 (langages_id), PRIMARY KEY(postes_id, langages_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profils_dev (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, localisation VARCHAR(255) NOT NULL, experience SMALLINT DEFAULT NULL, salaire_min NUMERIC(10, 2) DEFAULT NULL, biographie LONGTEXT DEFAULT NULL, avatar VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_50713A18A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profils_dev_langages (profils_dev_id INT NOT NULL, langages_id INT NOT NULL, INDEX IDX_A28B23C876DFA87B (profils_dev_id), INDEX IDX_A28B23C8C88BBA17 (langages_id), PRIMARY KEY(profils_dev_id, langages_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statistiques (id INT AUTO_INCREMENT NOT NULL, cible_id INT NOT NULL, type VARCHAR(255) NOT NULL, vues INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, role VARCHAR(20) NOT NULL, created_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_497B315EE7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE company ADD CONSTRAINT FK_4FBF094FA76ED395 FOREIGN KEY (user_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE postes ADD CONSTRAINT FK_5A763C64A76ED395 FOREIGN KEY (user_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE postes_langages ADD CONSTRAINT FK_164F0766E30A0B60 FOREIGN KEY (postes_id) REFERENCES postes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE postes_langages ADD CONSTRAINT FK_164F0766C88BBA17 FOREIGN KEY (langages_id) REFERENCES langages (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE profils_dev ADD CONSTRAINT FK_50713A18A76ED395 FOREIGN KEY (user_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE profils_dev_langages ADD CONSTRAINT FK_A28B23C876DFA87B FOREIGN KEY (profils_dev_id) REFERENCES profils_dev (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE profils_dev_langages ADD CONSTRAINT FK_A28B23C8C88BBA17 FOREIGN KEY (langages_id) REFERENCES langages (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE company DROP FOREIGN KEY FK_4FBF094FA76ED395');
        $this->addSql('ALTER TABLE postes DROP FOREIGN KEY FK_5A763C64A76ED395');
        $this->addSql('ALTER TABLE postes_langages DROP FOREIGN KEY FK_164F0766E30A0B60');
        $this->addSql('ALTER TABLE postes_langages DROP FOREIGN KEY FK_164F0766C88BBA17');
        $this->addSql('ALTER TABLE profils_dev DROP FOREIGN KEY FK_50713A18A76ED395');
        $this->addSql('ALTER TABLE profils_dev_langages DROP FOREIGN KEY FK_A28B23C876DFA87B');
        $this->addSql('ALTER TABLE profils_dev_langages DROP FOREIGN KEY FK_A28B23C8C88BBA17');
        $this->addSql('DROP TABLE company');
        $this->addSql('DROP TABLE evaluations');
        $this->addSql('DROP TABLE favoris');
        $this->addSql('DROP TABLE langages');
        $this->addSql('DROP TABLE messages');
        $this->addSql('DROP TABLE postes');
        $this->addSql('DROP TABLE postes_langages');
        $this->addSql('DROP TABLE profils_dev');
        $this->addSql('DROP TABLE profils_dev_langages');
        $this->addSql('DROP TABLE statistiques');
        $this->addSql('DROP TABLE utilisateurs');
    }
}
