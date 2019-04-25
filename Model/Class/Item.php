<?php


class Item{
    private $id;
    private $title;
    private $content;
    private $creation_date;

	/**
	 * Item constructor.
	 * @param $id
	 * @param $title
	 * @param $content
	 * @param $creation_date
	 */
	public function __construct($id = null, $title, $content, $creation_date)
	{
		$this->id = $id;
		$this->title = $title;
		$this->content = $content;
		if(is_null($creation_date)){
			$this->creation_date = date('Y-m-d');
		} else {
			$this->creation_date = $creation_date;
		}
	}

	/**
	 * @return null
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param null $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param mixed $title
	 */
	public function setTitle($title)
	{
		$this->title = $title;
	}

	/**
	 * @return mixed
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
	 * @param mixed $content
	 */
	public function setContent($content)
	{
		$this->content = $content;
	}

	/**
	 * @return mixed
	 */
	public function getCreationDate()
	{
		return $this->creation_date;
	}

	/**
	 * @param mixed $creation_date
	 */
	public function setCreationDate($creation_date)
	{
		$this->creation_date = $creation_date;
	}
}
?>