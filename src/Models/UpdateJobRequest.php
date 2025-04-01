<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class UpdateJobRequest extends Model
{
    /**
     * @var string
     */
    public $acrAssumeRoleArn;

    /**
     * @var string
     */
    public $acrInstanceId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $backoffLimit;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $commandArgs;

    /**
     * @var string
     */
    public $concurrencyPolicy;

    /**
     * @var string
     */
    public $configMapMountDesc;

    /**
     * @var string
     */
    public $customHostAlias;

    /**
     * @var string
     */
    public $edasContainerVersion;

    /**
     * @var bool
     */
    public $enableImageAccl;

    /**
     * @var string
     */
    public $envs;

    /**
     * @var string
     */
    public $imagePullSecrets;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $jarStartArgs;

    /**
     * @var string
     */
    public $jarStartOptions;

    /**
     * @var string
     */
    public $jdk;

    /**
     * @var string
     */
    public $mountDesc;

    /**
     * @var string
     */
    public $mountHost;

    /**
     * @var string
     */
    public $nasId;

    /**
     * @var string
     */
    public $ossAkId;

    /**
     * @var string
     */
    public $ossAkSecret;

    /**
     * @var string
     */
    public $ossMountDescs;

    /**
     * @var string
     */
    public $packageUrl;

    /**
     * @var string
     */
    public $packageVersion;

    /**
     * @var string
     */
    public $php;

    /**
     * @var string
     */
    public $phpConfig;

    /**
     * @var string
     */
    public $phpConfigLocation;

    /**
     * @var string
     */
    public $postStart;

    /**
     * @var string
     */
    public $preStop;

    /**
     * @var string
     */
    public $programmingLanguage;

    /**
     * @var string
     */
    public $python;

    /**
     * @var string
     */
    public $pythonModules;

    /**
     * @var string
     */
    public $refAppId;

    /**
     * @var string
     */
    public $replicas;

    /**
     * @var bool
     */
    public $slice;

    /**
     * @var string
     */
    public $sliceEnvs;

    /**
     * @var string
     */
    public $slsConfigs;

    /**
     * @var int
     */
    public $terminationGracePeriodSeconds;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $tomcatConfig;

    /**
     * @var string
     */
    public $triggerConfig;

    /**
     * @var string
     */
    public $warStartOptions;

    /**
     * @var string
     */
    public $webContainer;
    protected $_name = [
        'acrAssumeRoleArn' => 'AcrAssumeRoleArn',
        'acrInstanceId' => 'AcrInstanceId',
        'appId' => 'AppId',
        'backoffLimit' => 'BackoffLimit',
        'command' => 'Command',
        'commandArgs' => 'CommandArgs',
        'concurrencyPolicy' => 'ConcurrencyPolicy',
        'configMapMountDesc' => 'ConfigMapMountDesc',
        'customHostAlias' => 'CustomHostAlias',
        'edasContainerVersion' => 'EdasContainerVersion',
        'enableImageAccl' => 'EnableImageAccl',
        'envs' => 'Envs',
        'imagePullSecrets' => 'ImagePullSecrets',
        'imageUrl' => 'ImageUrl',
        'jarStartArgs' => 'JarStartArgs',
        'jarStartOptions' => 'JarStartOptions',
        'jdk' => 'Jdk',
        'mountDesc' => 'MountDesc',
        'mountHost' => 'MountHost',
        'nasId' => 'NasId',
        'ossAkId' => 'OssAkId',
        'ossAkSecret' => 'OssAkSecret',
        'ossMountDescs' => 'OssMountDescs',
        'packageUrl' => 'PackageUrl',
        'packageVersion' => 'PackageVersion',
        'php' => 'Php',
        'phpConfig' => 'PhpConfig',
        'phpConfigLocation' => 'PhpConfigLocation',
        'postStart' => 'PostStart',
        'preStop' => 'PreStop',
        'programmingLanguage' => 'ProgrammingLanguage',
        'python' => 'Python',
        'pythonModules' => 'PythonModules',
        'refAppId' => 'RefAppId',
        'replicas' => 'Replicas',
        'slice' => 'Slice',
        'sliceEnvs' => 'SliceEnvs',
        'slsConfigs' => 'SlsConfigs',
        'terminationGracePeriodSeconds' => 'TerminationGracePeriodSeconds',
        'timeout' => 'Timeout',
        'timezone' => 'Timezone',
        'tomcatConfig' => 'TomcatConfig',
        'triggerConfig' => 'TriggerConfig',
        'warStartOptions' => 'WarStartOptions',
        'webContainer' => 'WebContainer',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acrAssumeRoleArn) {
            $res['AcrAssumeRoleArn'] = $this->acrAssumeRoleArn;
        }

        if (null !== $this->acrInstanceId) {
            $res['AcrInstanceId'] = $this->acrInstanceId;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->backoffLimit) {
            $res['BackoffLimit'] = $this->backoffLimit;
        }

        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        if (null !== $this->commandArgs) {
            $res['CommandArgs'] = $this->commandArgs;
        }

        if (null !== $this->concurrencyPolicy) {
            $res['ConcurrencyPolicy'] = $this->concurrencyPolicy;
        }

        if (null !== $this->configMapMountDesc) {
            $res['ConfigMapMountDesc'] = $this->configMapMountDesc;
        }

        if (null !== $this->customHostAlias) {
            $res['CustomHostAlias'] = $this->customHostAlias;
        }

        if (null !== $this->edasContainerVersion) {
            $res['EdasContainerVersion'] = $this->edasContainerVersion;
        }

        if (null !== $this->enableImageAccl) {
            $res['EnableImageAccl'] = $this->enableImageAccl;
        }

        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }

        if (null !== $this->imagePullSecrets) {
            $res['ImagePullSecrets'] = $this->imagePullSecrets;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->jarStartArgs) {
            $res['JarStartArgs'] = $this->jarStartArgs;
        }

        if (null !== $this->jarStartOptions) {
            $res['JarStartOptions'] = $this->jarStartOptions;
        }

        if (null !== $this->jdk) {
            $res['Jdk'] = $this->jdk;
        }

        if (null !== $this->mountDesc) {
            $res['MountDesc'] = $this->mountDesc;
        }

        if (null !== $this->mountHost) {
            $res['MountHost'] = $this->mountHost;
        }

        if (null !== $this->nasId) {
            $res['NasId'] = $this->nasId;
        }

        if (null !== $this->ossAkId) {
            $res['OssAkId'] = $this->ossAkId;
        }

        if (null !== $this->ossAkSecret) {
            $res['OssAkSecret'] = $this->ossAkSecret;
        }

        if (null !== $this->ossMountDescs) {
            $res['OssMountDescs'] = $this->ossMountDescs;
        }

        if (null !== $this->packageUrl) {
            $res['PackageUrl'] = $this->packageUrl;
        }

        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }

        if (null !== $this->php) {
            $res['Php'] = $this->php;
        }

        if (null !== $this->phpConfig) {
            $res['PhpConfig'] = $this->phpConfig;
        }

        if (null !== $this->phpConfigLocation) {
            $res['PhpConfigLocation'] = $this->phpConfigLocation;
        }

        if (null !== $this->postStart) {
            $res['PostStart'] = $this->postStart;
        }

        if (null !== $this->preStop) {
            $res['PreStop'] = $this->preStop;
        }

        if (null !== $this->programmingLanguage) {
            $res['ProgrammingLanguage'] = $this->programmingLanguage;
        }

        if (null !== $this->python) {
            $res['Python'] = $this->python;
        }

        if (null !== $this->pythonModules) {
            $res['PythonModules'] = $this->pythonModules;
        }

        if (null !== $this->refAppId) {
            $res['RefAppId'] = $this->refAppId;
        }

        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }

        if (null !== $this->slice) {
            $res['Slice'] = $this->slice;
        }

        if (null !== $this->sliceEnvs) {
            $res['SliceEnvs'] = $this->sliceEnvs;
        }

        if (null !== $this->slsConfigs) {
            $res['SlsConfigs'] = $this->slsConfigs;
        }

        if (null !== $this->terminationGracePeriodSeconds) {
            $res['TerminationGracePeriodSeconds'] = $this->terminationGracePeriodSeconds;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }

        if (null !== $this->tomcatConfig) {
            $res['TomcatConfig'] = $this->tomcatConfig;
        }

        if (null !== $this->triggerConfig) {
            $res['TriggerConfig'] = $this->triggerConfig;
        }

        if (null !== $this->warStartOptions) {
            $res['WarStartOptions'] = $this->warStartOptions;
        }

        if (null !== $this->webContainer) {
            $res['WebContainer'] = $this->webContainer;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcrAssumeRoleArn'])) {
            $model->acrAssumeRoleArn = $map['AcrAssumeRoleArn'];
        }

        if (isset($map['AcrInstanceId'])) {
            $model->acrInstanceId = $map['AcrInstanceId'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['BackoffLimit'])) {
            $model->backoffLimit = $map['BackoffLimit'];
        }

        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        if (isset($map['CommandArgs'])) {
            $model->commandArgs = $map['CommandArgs'];
        }

        if (isset($map['ConcurrencyPolicy'])) {
            $model->concurrencyPolicy = $map['ConcurrencyPolicy'];
        }

        if (isset($map['ConfigMapMountDesc'])) {
            $model->configMapMountDesc = $map['ConfigMapMountDesc'];
        }

        if (isset($map['CustomHostAlias'])) {
            $model->customHostAlias = $map['CustomHostAlias'];
        }

        if (isset($map['EdasContainerVersion'])) {
            $model->edasContainerVersion = $map['EdasContainerVersion'];
        }

        if (isset($map['EnableImageAccl'])) {
            $model->enableImageAccl = $map['EnableImageAccl'];
        }

        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }

        if (isset($map['ImagePullSecrets'])) {
            $model->imagePullSecrets = $map['ImagePullSecrets'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['JarStartArgs'])) {
            $model->jarStartArgs = $map['JarStartArgs'];
        }

        if (isset($map['JarStartOptions'])) {
            $model->jarStartOptions = $map['JarStartOptions'];
        }

        if (isset($map['Jdk'])) {
            $model->jdk = $map['Jdk'];
        }

        if (isset($map['MountDesc'])) {
            $model->mountDesc = $map['MountDesc'];
        }

        if (isset($map['MountHost'])) {
            $model->mountHost = $map['MountHost'];
        }

        if (isset($map['NasId'])) {
            $model->nasId = $map['NasId'];
        }

        if (isset($map['OssAkId'])) {
            $model->ossAkId = $map['OssAkId'];
        }

        if (isset($map['OssAkSecret'])) {
            $model->ossAkSecret = $map['OssAkSecret'];
        }

        if (isset($map['OssMountDescs'])) {
            $model->ossMountDescs = $map['OssMountDescs'];
        }

        if (isset($map['PackageUrl'])) {
            $model->packageUrl = $map['PackageUrl'];
        }

        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }

        if (isset($map['Php'])) {
            $model->php = $map['Php'];
        }

        if (isset($map['PhpConfig'])) {
            $model->phpConfig = $map['PhpConfig'];
        }

        if (isset($map['PhpConfigLocation'])) {
            $model->phpConfigLocation = $map['PhpConfigLocation'];
        }

        if (isset($map['PostStart'])) {
            $model->postStart = $map['PostStart'];
        }

        if (isset($map['PreStop'])) {
            $model->preStop = $map['PreStop'];
        }

        if (isset($map['ProgrammingLanguage'])) {
            $model->programmingLanguage = $map['ProgrammingLanguage'];
        }

        if (isset($map['Python'])) {
            $model->python = $map['Python'];
        }

        if (isset($map['PythonModules'])) {
            $model->pythonModules = $map['PythonModules'];
        }

        if (isset($map['RefAppId'])) {
            $model->refAppId = $map['RefAppId'];
        }

        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        if (isset($map['Slice'])) {
            $model->slice = $map['Slice'];
        }

        if (isset($map['SliceEnvs'])) {
            $model->sliceEnvs = $map['SliceEnvs'];
        }

        if (isset($map['SlsConfigs'])) {
            $model->slsConfigs = $map['SlsConfigs'];
        }

        if (isset($map['TerminationGracePeriodSeconds'])) {
            $model->terminationGracePeriodSeconds = $map['TerminationGracePeriodSeconds'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        if (isset($map['TomcatConfig'])) {
            $model->tomcatConfig = $map['TomcatConfig'];
        }

        if (isset($map['TriggerConfig'])) {
            $model->triggerConfig = $map['TriggerConfig'];
        }

        if (isset($map['WarStartOptions'])) {
            $model->warStartOptions = $map['WarStartOptions'];
        }

        if (isset($map['WebContainer'])) {
            $model->webContainer = $map['WebContainer'];
        }

        return $model;
    }
}
