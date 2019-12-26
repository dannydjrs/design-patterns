<?php

class PersonalityBuilder implements Builder
{	
	const DEFAULT_PERSONALITY_VALUE = 0.5;
	const DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE = 0.2;

	/** @var array */
	private $personality;

	public function __construct()
	{
		$this->personality['openness'] = self::DEFAULT_PERSONALITY_VALUE;
		$this->personality['conscientiousness'] = self::DEFAULT_PERSONALITY_VALUE;
		$this->personality['extroversion'] = self::DEFAULT_PERSONALITY_VALUE;
		$this->personality['agreeableness'] = self::DEFAULT_PERSONALITY_VALUE; 
		$this->personality['neuroticisim'] = self::DEFAULT_PERSONALITY_VALUE;
	}

	public function getResult()
	{
		return $this->personality;
	}

	public function makeAnxious()
	{
		$this->personality['neuroticisim'] += self::DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE;
	}

	public function makeAngry()
	{
		$this->personality['neuroticisim'] += self::DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE;
	}

	public function makeDistressed()
	{
		$this->personality['neuroticisim'] += self::DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE;
	}

	public function makeDepressed()
	{
		$this->personality['neuroticisim'] += self::DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE;
	}

	public function makeStable()
	{
		$this->personality['neuroticisim'] -= self::DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE;
	}

	public function makeSociable()
	{
		$this->personality['extroversion'] += self::DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE;
	}

	public function makeGregarious()
	{
		$this->personality['extroversion'] += self::DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE;
	}

	public function makeOutgoing()
	{
		$this->personality['extroversion'] += self::DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE;
	}

	public function makeReserved()
	{
		$this->personality['extroversion'] -= self::DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE;
	}

	public function makeDeliberate()
	{
		$this->personality['extroversion'] -= self::DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE;
	}

	public function makeCreative()
	{
		$this->personality['openness'] += self::DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE;
	}

	public function makeCurious()
	{
		$this->personality['openness'] += self::DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE;
	}

	public function makeConservative()
	{
		$this->personality['openness'] -= self::DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE;
	}

	public function makeFriendly()
	{
		$this->personality['agreeableness'] += self::DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE;
	}

	public function makeCooperative()
	{
		$this->personality['agreeableness'] += self::DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE;
	}

	public function makeSuspicious()
	{
		$this->personality['agreeableness'] -= self::DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE;
	}
	
	public function makeUnkind()
	{
		$this->personality['agreeableness'] -= self::DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE;
	}

	public function makeOrganised()
	{
		$this->personality['conscientiousness'] += self::DEFAULT_TRAIT_PERSONALITY_CHANGE_VALUE;
	}

	public function makeSelfDisciplined()
	{
		$this->personality['conscientiousness'] += self::DEFAULT_TRAIT_PERSONALTIY_CHANGE_VALUE;
	}

	public function makeDutiful()
	{
		$this->personality['conscientiousness'] += self::DEFAULT_TRAIT_PERSONALTIY_CHANGE_VALUE;
	}

	public function makeCareless()
	{
		$this->personality['conscientiousness'] -= self::DEFAULT_TRAIT_PERSONALTIY_CHANGE_VALUE;
	}

	public function makeImpulsive()
	{
		$this->personality['conscientiousness'] -= self::DEFAULT_TRAIT_PERSONALTIY_CHANGE_VALUE;
	}
}
