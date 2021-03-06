<?php
namespace MailPoetVendor\Symfony\Component\DependencyInjection;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Symfony\Contracts\Service\ResetInterface;
interface ResettableContainerInterface extends ContainerInterface, ResetInterface
{
 public function reset();
}
