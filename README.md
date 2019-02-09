# DockerでLAMP環境構築

カスタムネットワークの作成
```bash
$ $ docker network create [networkName]
```

MySQLと接続できるホストは，下記コマンドで検索
```bash
$ docker network inspect [networkName]
```


