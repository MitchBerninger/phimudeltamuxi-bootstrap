NOTE: database connection file was intentionally left out. 

Release Process:
* The development branch will be used as the stable development environment
* The master branch will be uses as the release branch
* Create feature branches via pull requests as necessary off of the development branch
* Merge feature branches into develop when complete
* Merge develop into master when ready to release
* Use master branch and upload files via ftp client (need better upload process)

```
git checkout master
git pull origin master
git merge BRANCH_NAME
git push origin master
```