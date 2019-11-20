<?php

namespace ReShare\RecordDriver;

class SolrFolioFactory implements \Zend\ServiceManager\Factory\FactoryInterface
{

    /**
     * Create an object
     *
     * @param ContainerInterface $container     Service manager
     * @param string             $requestedName Service being created
     * @param null|array         $options       Extra options (optional)
     *
     * @return object
     *
     * @throws ServiceNotFoundException if unable to resolve the service.
     * @throws ServiceNotCreatedException if an exception is raised when
     * creating a service.
     * @throws ContainerException if any other error occurs
     */
    public function __invoke(\Interop\Container\ContainerInterface $container, $requestedName, array $options = null)
    {
	$loggedInUser = $container->get(\VuFind\Auth\Manager::class)->isLoggedIn();

	if (isset($loggedInUser->username)) {
	    $tstPatron = $loggedInUser->username;
	} else {
	    $tstPatron = null;
	}

        return new \ReShare\RecordDriver\SolrFolio($tstPatron);
    }
}

