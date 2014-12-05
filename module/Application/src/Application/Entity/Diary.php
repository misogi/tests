<?php
/**
 * Date: 14/12/05
 * Time: 17:31
 */

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mroonga test
 * @ORM\Table(options={"engine":"Mroonga"})
 * @ORM\Entity(repositoryClass="Jac\ReportGeneratorBundle\Entity\ReportDataRepository")
 */
class Diary 
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(length=255)
     */
    public $content;
} 