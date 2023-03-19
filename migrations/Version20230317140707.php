<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230317140707 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE heure_ouverture (id INT AUTO_INCREMENT NOT NULL, jour_de_la_semaine VARCHAR(255) NOT NULL, heure_ouverture TIME NOT NULL, heure_fermeture VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE recipe DROP time, DROP nb_people, DROP difficulty, DROP description, DROP price, DROP is_favorite, DROP created_at, DROP updated_at');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE heure_ouverture');
        $this->addSql('ALTER TABLE recipe ADD time INT DEFAULT NULL, ADD nb_people INT DEFAULT NULL, ADD difficulty INT DEFAULT NULL, ADD description LONGTEXT NOT NULL, ADD price DOUBLE PRECISION DEFAULT NULL, ADD is_favorite TINYINT(1) NOT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }
}
