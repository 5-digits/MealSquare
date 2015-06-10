<?php

/**
 * This file is part of the <name> project.
 *
 * (c) <yourname> <youremail>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\UserBundle\Entity;

use Sonata\UserBundle\Entity\BaseUser as BaseUser;

/**
 * This file has been generated by the Sonata EasyExtends bundle ( https://sonata-project.org/bundles/easy-extends )
 *
 * References :
 *   working with object : http://www.doctrine-project.org/projects/orm/2.0/docs/reference/working-with-objects/en
 *
 * @author <yourname> <youremail>
 */
class User extends BaseUser
{
    /**
     * @var integer $id
     */
    protected $id;
    
    /**
     * 
     */
    private $badges;
    
    private $recettes_favoris;
    
    /**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     */
    protected $avatar;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add badge
     *
     * @param \Application\Sonata\UserBundle\Entity\Badge $badge
     *
     * @return User
     */
    public function addBadge(\Application\Sonata\UserBundle\Entity\Badge $badge)
    {
        $this->badges[] = $badge;

        return $this;
    }

    /**
     * Remove badge
     *
     * @param \Application\Sonata\UserBundle\Entity\Badge $badge
     */
    public function removeBadge(\Application\Sonata\UserBundle\Entity\Badge $badge)
    {
        $this->badges->removeElement($badge);
    }

    /**
     * Get badges
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBadges()
    {
        return $this->badges;
    }

    /**
     * Add recettesFavori
     *
     * @param \MealSquare\RecetteBundle\Entity\Recette $recettesFavori
     *
     * @return User
     */
    public function addRecettesFavori(\MealSquare\RecetteBundle\Entity\Recette $recettesFavori)
    {
        $this->recettes_favoris[] = $recettesFavori;

        return $this;
    }

    /**
     * Remove recettesFavori
     *
     * @param \MealSquare\RecetteBundle\Entity\Recette $recettesFavori
     */
    public function removeRecettesFavori(\MealSquare\RecetteBundle\Entity\Recette $recettesFavori)
    {
        $this->recettes_favoris->removeElement($recettesFavori);
    }

    /**
     * Get recettesFavoris
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecettesFavoris()
    {
        return $this->recettes_favoris;
    }

    /**
     * Set avatar
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $avatar
     *
     * @return User
     */
    public function setAvatar(\Application\Sonata\MediaBundle\Entity\Media $avatar = null)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getAvatar()
    {
        return $this->avatar;
    }
}
