<?php

namespace DrupalCenter\Robo\Task\Settings;

trait loadTasks {

  /**
   * Ensure settings file for local environments.
   *
   * @param string $environment
   *   An environment string.
   *
   * @return EnsureSettingsFile
   */
  protected function taskSettingsEnsureSettingsFile($environment) {
    return $this->task(EnsureSettingsFile::class, $environment);
  }

}
