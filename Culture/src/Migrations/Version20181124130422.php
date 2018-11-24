<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181124130422 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE species (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, latin_name VARCHAR(255) NOT NULL, familly VARCHAR(255) NOT NULL, health_property LONGTEXT DEFAULT NULL, utilization LONGTEXT DEFAULT NULL, good_association LONGTEXT DEFAULT NULL, bad_association LONGTEXT DEFAULT NULL, seedling VARCHAR(255) NOT NULL, harvest VARCHAR(255) NOT NULL, size INT DEFAULT NULL, exposure VARCHAR(255) NOT NULL, soil VARCHAR(255) DEFAULT NULL, inter_line INT DEFAULT NULL, inter_plant INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE species');
    }
}
