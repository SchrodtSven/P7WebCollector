# P7WebCollector
Small framework supporting access to http(s) resources for PHP 8.2+

- Communication with APIs
- Parsing responses (JSON, SOAP, RSS)
- Transforming response data and persisting (to RDBMS, file system, APIs ...)
- Aggregating data from different sources within a unique API

nuff said 4 now

<b>
# Next steps

- adding transformNS()
- cping project and make sub project *P7SourceWizard*
 -- Generation
 -- ReverseEngineering
   --- Type; DAta; Code, 


- adding src/P7WebCollector/Strm ()Streams
  : stream controls
  I/O -> filters () for user filters - see: https://www.php.net/manual/en/function.stream-filter-register.php 
</b>


# Appendix
<pre>
├── Code - generating source code for diff. target   languagess
├── Comm (communication) - Network communcication 
     (raw) sockets, http, etc.
├── Cont (content) - entity classes
├── Data
├── Intl (internal) - internally used classes
├── Pers (persistence)
├── Stor (age) - persistence layer 
├── Term (inal) - stuff for building CLI/shell rel. stuff incl. batch jobs
└── Type - using (native) data types as objects

</pre>

# Development environment

- Boxes: MacBookAir M1 /2020; iMac21,2 M1/2020
- OS: Darwin Marvell 22.3.0 Darwin Kernel Version 22.3.0; RELEASE_ARM64_T8103 arm64
- IDE: Visual Studio Code; version: 1.70.2 (Universal)
- PHP: 8.2.0 (NTS); with Zend OPcache v8.2.0
- Sqlite: version 3.39.5
