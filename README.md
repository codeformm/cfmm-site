# cfmm-site
## SSH接続(VS CodeのRemote - SSH拡張機能)を利用してthemesファイル以下のみをGitHub管理およびサーバーアップを同時にしています
- リリースフロー：ローカルにGitリポジトリを置いて更新しGitHub mainブランチへcommit/push、サーバーにSSH接続で入ってmainの最新をpullすれば本番反映される
- ローカル環境：wp-envでもDockerでもLocalでもいいのでローカル確認環境を作り、そこで開発・動作確認する
