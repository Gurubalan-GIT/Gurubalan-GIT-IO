## Github-Pages
This is my personal website hosted using `Github-Pages`, domain being purchased elsewhere. 

### Setting it up

- Most of them is easy, after creating a repository such as - `YourUserName.github.io`, you can pretty much push the files to the master branch and you're done for the hosting part. 
  
- You might also want to create a branch called `gh-pages` and push it there as well.
  
- Now, to connect to a custom domain name, create a `CNAME` file in the root of your repository and just type - `YourWebsite.ext`.
  
- Now, go back to your domain provider and click on `Manage DNS settings` and you'll see a set of records getting rerouted to IP addresses. 
  
- After this, go ahead and follow [these](https://help.github.com/en/articles/setting-up-an-apex-domain) instructions.
  
- After a few minutes you're good to go, and make sure you tick up `Enforce HTTPS` for making it secure so Google Chrome doesn't mess things up. 

*Thank you!*
  