<?php
/**
 * This Driver is based entirely on official documentation of the Mattermost Web
 * Services API and you can extend it by following the directives of the documentation.
 *
 * God bless this mess.
 *
 * @author nullM <nullm303@gmail.com>
 * @link https://api.mattermost.com/
 */

namespace Gnello\Mattermost\Models;

use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;

/**
 * Class SiteModel
 *
 * @package Gnello\Mattermost\Models
 */
class SiteModel extends AbstractModel
{
    /**
     * @param array $requestOptions
     * @return ResponseInterface
     */
    public function getConfiguration(array $requestOptions)
    {
        return $this->client->get('/config', $requestOptions);
    }
}
