Quip
====

A commenting component for MODx Revolution

## modx3 adaptation attempt.
### Quip 2.3.5 - Modx3 conversion beta
- Changes so that it would build and work in modx3.  No extensive testing is performed.
- reCaptcha used in the source seems v1. it does not work with either v2 or v3 of reCaptcha. mcrypt library used is also deprecated in PHP 7.2 and above.
- There is a transport package in the release, but there is no guarantee it would work in your setup.
