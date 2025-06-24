Quip
====

A commenting component for MODx Revolution

## modx3 adaptation attempt.
### Quip 2.3.6 - Modx3 conversion beta
- Changes so that it would build and work in modx3. This is based on patch made by <a href="https://github.com/zahlenhexe/Quip">zahlenhexe</a>. The original patch was made for 2.3.4pl.  I used 2.3.5 to apply the same patch.
- I also tweaked _build part so the transport package will compile under modx3 install. 
- The package appears to be working on my server environment, but no extensive testing was done.
- reCaptcha used in the original source was for v1. There is a pull request in the modxcms/quip as pr#21 but this pr has not been pulled.  These patches were implemented. It appears to work but again no extensive test was made.
- To make it work with Article 2.0.0pl, change article template to call properties without '!' (for example, use [[+latest_posts]] instead of [[!+latest_posts]])
- There is a transport package in the release, in case you would like to test it by yourself.
- QuipRss is not tested (I dont use it)
- Threaded reply is not tested (ditto)
