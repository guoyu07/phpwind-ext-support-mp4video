# phpwind-ext-support-mp4video
Enable phpwind to support MP4 video playback.

## Installed

安装插件，有两个安装方式的支持，任选其一即可，分别是 `Composer` ， `Download` 。

⚠️：插件运行 [phpwind Fans](https://github.com/medz/phpwind) **>= v1.0.9** 版本之上，低于此版本，插件将无法运行。

### Composer

首先，进入phpwind根目录，然后执行：

```shell
composer install medz/phpwind-ext-support-mp4video
```

> 执行完命令后进入后台，应用安装，找到 **SupportMP4Video** 点击安装

### Download

1. [点击这里](https://github.com/medz/phpwind-ext-support-mp4video/archive/master.zip) 下载插件
2. 解压 **zip** 归档，将目录重命名为 **SupportMP4Video**
3. 将目录 **SupportMP4Video** 放入 `/src/extensions/` 目录下
4. 进入后台，应用安装，找到 **SupportMP4Video** 点击安装

## 等等，插件实现了什么功能？

😄标题和概述只是说让 phpwind 支持 mp4 视频播放了，有的同学是不是一脸萌比？

因为很疑惑怎么插入 mp4 视频吧？插件安装后，不需要任何设置，在pw默认播放器中，有一个插入视频的功能～这个插件就是拓展了这一功能～

原本的插入视频，只能插入 swf 也就是第三发的视频播放器，现在，这里可以直接插入 mp4 文件地址了。

> 视频播放基于 video.js
