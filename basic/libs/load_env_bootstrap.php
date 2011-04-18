<?php

// import in bootstrap.php like: require_once(APP . DS . 'libs' . DS . 'load_env_bootstrap.php')

/**
 * 環境別のbootstrapファイルの読み込み
 *
 * @param array $environments 環境設定の読み込み順
 * @return string 環境文字列
 */
function load_env_bootstrap($environments = array('development', 'staging', 'production')) {

    $envDir = CONFIGS . 'env' . DS;

    foreach ($environments as $env) {
        if (!is_file($envDir . $env)) {
            continue;
        }

        // 各アプリ配下のconfigから設定ファイルを読み込む
        $bootstrapPaths = array(
            CONFIGS . $env . DS . 'bootstrap.php',
        );

        foreach ($bootstrapPaths as $bootstrap) {
            // bootstrapの読み込み
            if (is_file($bootstrap)) {
                include_once $bootstrap;
            }
        }

        Configure::write('env', $env);
        return $env;
    }
    // 読み出しができない場合は読み込み順の1番目を環境として返す
    Configure::write('env', $environments[0]);
    return $environments[0];
}
