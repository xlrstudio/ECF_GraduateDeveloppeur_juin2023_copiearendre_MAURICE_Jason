<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230307085356 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql('ALTER TABLE form CHANGE heure heure VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category_post DROP FOREIGN KEY FK_D11116CA12469DE2');
        $this->addSql('ALTER TABLE category_post DROP FOREIGN KEY FK_D11116CA4B89032C');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CF675F31B');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C4B89032C');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DFDFF2E92');
        $this->addSql('ALTER TABLE user_post_like DROP FOREIGN KEY FK_65D6AA5C4B89032C');
        $this->addSql('ALTER TABLE user_post_like DROP FOREIGN KEY FK_65D6AA5CA76ED395');
        $this->addSql('ALTER TABLE tag_post DROP FOREIGN KEY FK_B485D33BBAD26311');
        $this->addSql('ALTER TABLE tag_post DROP FOREIGN KEY FK_B485D33B4B89032C');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE category_post');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE user_post_like');
        $this->addSql('DROP TABLE tag');
        $this->addSql('DROP TABLE tag_post');
        $this->addSql('DROP TABLE thumbnail');
        $this->addSql('ALTER TABLE form CHANGE heure heure INT NOT NULL');
        $this->addSql('ALTER TABLE mark CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE recipe CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE ingredient CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD prenom VARCHAR(255) NOT NULL, ADD tel VARCHAR(255) NOT NULL, ADD allergies VARCHAR(255) NOT NULL, ADD couverts VARCHAR(255) NOT NULL, DROP last_name, DROP first_name, DROP created_at, DROP updated_at, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE email email VARCHAR(180) NOT NULL, CHANGE avatar nom VARCHAR(255) NOT NULL');
    }
}
