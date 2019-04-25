<?php


class Comment
{
	private $author;
	private $creation_date;
	private $content;

	/**
	 * Comment constructor.
	 * @param $author
	 * @param $creation_date
	 * @param $content
	 */
	public function __construct($author, $creation_date, $content)
	{
		$this->author = $author;
		$this->creation_date = $creation_date;
		$this->content = $content;
	}

	/**
	 * @return mixed
	 */
	public function getAuthor()
	{
		return $this->author;
	}

	/**
	 * @param mixed $author
	 */
	public function setAuthor($author)
	{
		$this->author = $author;
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
}