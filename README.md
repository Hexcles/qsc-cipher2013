# QSCTech 2013 Cipher/CTF Contest

## Intro
2013年第13届网络文化节技术大赛，由求是潮技术研发中心制作。

Insipred by SegmentFault Game, Youdao Nanti. Thanks to those geeks.

All the source codes are in BSD license.

## Directories
tools	Some small programs to do decode/encode work.
upload	Upload directory(need to be writable).

## Database

```sql
CREATE TABLE IF NOT EXISTS `auth` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `key` varchar(50) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `auth` (`user`, `pass`, `key`) VALUES
('root', 'a;slkdjf981q0237xzc56', 'uip213sd9wencd0231odas8eqw7321');
```
