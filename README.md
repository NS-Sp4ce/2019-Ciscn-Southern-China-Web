# 2019年CISCN华南赛区部分web题目备份


# 介绍

2019年CISCN华南赛区部分web题目备份

时间比较久了，这是**fix后**的，凭着印象改回原先存在漏洞的版本了

- web1~web7为第一天的
- web8~web11为第二天的
- web2.rar是web2的原题目，github无法添加含有`.git`的文件夹，故此打包备份

# 部分提示

1. web1->RCE
2. web2->SQL inject（Laravel框架）
3. web3->SQL inject + cookie伪造（https://github.com/ssst0n3/ctf-wp/blob/master/2016/seccon/WEB/biscuiti/readme.md）
4. web5->XSS+SSRF
5. web7->文件包含原题（[https://www.windylh.com/2018/11/11/hctf2018%20Web%E9%83%A8%E5%88%86Writeup/](https://www.windylh.com/2018/11/11/hctf2018 Web部分Writeup/)）提示：[CVE-2018-12613 phpMyAdmin后台文件包含分析](http://seaii-blog.com/index.php/2018/07/03/84.html)
6. web8->smarty <=3.1.32 远程代码执行（https://www.cnblogs.com/magic-zero/p/8351974.html）
7. web10->爆破bisskey？不懂
8. web11->flask框架

# Writeup

https://xz.aliyun.com/t/5558

# 反馈

有问题请反馈issues
