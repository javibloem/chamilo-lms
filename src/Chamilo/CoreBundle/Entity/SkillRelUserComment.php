<?php
/* For licensing terms, see /license.txt */
namespace Chamilo\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkillRelUserComment class
 *
 * @ORM\Table(
 *  name="skill_rel_user_comment",
 *  indexes={
 *      @ORM\Index(name="idx_select_su_giver", columns={"skill_rel_user_id", "feedback_giver_id"})
 *  }
 * )
 * @ORM\Entity(repositoryClass="Chamilo\CoreBundle\Entity\Repository\SkillRelUserCommentRepository")
 */
class SkillRelUserComment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Chamilo\CoreBundle\Entity\SkillRelUser", inversedBy="comments")
     * @ORM\JoinColumn(name="skill_rel_user_id", referencedColumnName="id")
     */
    private $skillRelUser;

    /**
     * @ORM\ManyToOne(targetEntity="Chamilo\UserBundle\Entity\User", inversedBy="commentedUserSkills")
     * @ORM\JoinColumn(name="feedback_giver_id", referencedColumnName="id")
     */
    private $feedbackGiver;

    /**
     * @var string
     *
     * @ORM\Column(name="feedback_text", type="text")
     */
    private $feedbackText;

    /**
     * @var int
     *
     * @ORM\Column(name="feedback_value", type="integer", nullable=true, options={"default":1})
     */
    private $feedbackValue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="feedback_datetime", type="datetime")
     */
    private $feedbackDateTime;

    /**
     * Get id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get skillRelUser
     * @return Chamilo\CoreBundle\Entity\SkillRelUser
     */
    public function getSkillRelUser()
    {
        return $this->skillRelUser;
    }

    /**
     * Get feedbackGiver
     * @return Chamilo\UserBundle\Entity\User
     */
    public function getFeedbackGiver()
    {
        return $this->feedbackGiver;
    }

    /**
     * Get feedbackText
     * @return string
     */
    public function getFeedbackText()
    {
        return $this->feedbackText;
    }

    /**
     * Get feedbackValue
     * @return int
     */
    public function getFeedbackValue()
    {
        return $this->feedbackValue;
    }

    /**
     * Get feedbackDateTime
     * @return type
     */
    public function getFeedbackDateTime()
    {
        return $this->feedbackDateTime;
    }

    /**
     * Set skillRelUser
     * @param \Chamilo\CoreBundle\Entity\SkillRelUser $skillRelUser
     * @return \Chamilo\CoreBundle\Entity\SkillRelUserComment
     */
    public function setSkillRelUser(SkillRelUser $skillRelUser)
    {
        $this->skillRelUser = $skillRelUser;

        return $this;
    }

    /**
     * Set feedbackGiver
     * @param \Chamilo\UserBundle\Entity\User $feedbackGiver
     * @return \Chamilo\CoreBundle\Entity\SkillRelUserComment
     */
    public function setFeedbackGiver(\Chamilo\UserBundle\Entity\User $feedbackGiver)
    {
        $this->feedbackGiver = $feedbackGiver;

        return $this;
    }

    /**
     * Set feedbackText
     * @param string $feedbackText
     * @return \Chamilo\CoreBundle\Entity\SkillRelUserComment
     */
    public function setFeedbackText($feedbackText)
    {
        $this->feedbackText = $feedbackText;

        return $this;
    }

    /**
     * Set feebackValue
     * @param int $feedbackValue
     * @return \Chamilo\CoreBundle\Entity\SkillRelUserComment
     */
    public function setFeedbackValue($feedbackValue)
    {
        $this->feedbackValue = $feedbackValue;

        return $this;
    }

    /**
     * Set feedbackDateTime
     * @param \DateTime $feedbackDateTime
     * @return \Chamilo\CoreBundle\Entity\SkillRelUserComment
     */
    public function setFeedbackDateTime(\DateTime $feedbackDateTime)
    {
        $this->feedbackDateTime = $feedbackDateTime;

        return $this;
    }
}
