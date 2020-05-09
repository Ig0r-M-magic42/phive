<?php declare(strict_types = 1);
namespace PharIo\Phive;

use PharIo\FileSystem\Filename;
use PharIo\Version\Version;
use PharIo\Version\VersionConstraint;

class InstalledPhar {

    /** @var string */
    private $name;

    /** @var Version */
    private $installedVersion;

    /** @var VersionConstraint */
    private $versionConstraint;

    /** @var Filename */
    private $location;

    /** @var bool */
    private $copy;

    public function __construct(
        string $name,
        Version $installedVersion,
        VersionConstraint $versionConstraint,
        Filename $location,
        bool $copy
    ) {
        $this->name              = $name;
        $this->installedVersion  = $installedVersion;
        $this->versionConstraint = $versionConstraint;
        $this->location          = $location;
        $this->copy              = $copy;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getInstalledVersion(): Version {
        return $this->installedVersion;
    }

    public function getVersionConstraint(): VersionConstraint {
        return $this->versionConstraint;
    }

    public function getLocation(): Filename {
        return $this->location;
    }

    public function isCopy(): bool {
        return $this->copy;
    }
}
