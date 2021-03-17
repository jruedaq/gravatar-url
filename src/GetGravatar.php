<?php


namespace jruedaq\GravatarUrl;


class GetGravatar
{
    /**
     * @var string $username
     */
    private $username;
    /**
     * @var string $email
     */
    private $email;
    /**
     * @var int $size
     */
    private $size;

    /**
     * GetGravatar constructor.
     * @param string $username Put username for text default image if no registered in gravatar, can use spaces
     * @param string $email Email to search in gravatar
     * @param int $size Size for getting image
     */
    private function __construct(string $username, string $email, int $size)
    {
        $this->username = $username;
        $this->email = $email;
        $this->size = $size;
    }

    /**
     * @param string $username Put username for text default image if no registered in gravatar, can use spaces
     * @param string $email Email to search in gravatar
     * @param int $size Size for getting image
     * @return string return a url image for use in img html tag
     */
    public static function getUrl(string $username, string $email, int $size = 24): string
    {
        $obj = new GetGravatar($username, $email, $size);
        return "https://www.gravatar.com/avatar/" . md5(strtolower(trim($obj->email))) . "?d=" . urlencode($obj->generateDefaultImage()) . "&s=" . $obj->size;
    }

    /**
     * @return string return generated default image
     */
    private function generateDefaultImage(): string
    {
        $color = $this->generateDefaultColor();
        $user = strtr($this->username, [" " => "+"]);
        return "https://ui-avatars.com/api/$user/$this->size/$color/fff";
    }

    /**
     * @return string convert $username to hex color
     */
    private function generateDefaultColor(): string {
        return substr(implode(unpack("H*", $this->username)), 0, 6);
    }
}