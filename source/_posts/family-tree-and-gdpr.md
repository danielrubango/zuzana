---
extends: _layouts.post
section: content
title: Family tree and GDPR, version 0.1
date: 2019-05-03
description: When I posted about the Family Tree app last time, few people approached me, warning me about the potential GDPR compliance issues ...
cover_image: /assets/images/tree2.jpg
categories: [laravel, family-tree]
---

When I posted about the Family Tree app [last time](/blog/family-tree-app-beginning), few people approached me, warning me about the potential GDPR compliance issues. And to be honest, GDPR has been on my mind a lot, when it comes to developing this app.

GDPR, or [General Data Protection Regulation](https://eugdpr.org/), is EU's legislation protecting the data of EU citizens by regulating the collection and handling of personal data.

I'm not intending to turn it into a commercial app, so I am not going to spend money on a GDPR consultant, but I still want to do my due diligence and do my best when it comes to handling personal data.

I have done some research, and this is what I found:

- GDPR does not cover records related to deceased people
- When it comes to living people, if the data collected is for personal purposes and not subject to a public release, it is not a subject to GDPR (so the family tree would only be available to the owner/user)
- If the data were subject to public release (the family tree would be made public), the data would be subject to GDPR and consent from all living parties must be obtained 

To address the last point, should the user wish to make their family tree public, I will create consent form each user will need to agree to when signing up to the app, stipulating the nature of data being collected, how it will be stored and processed.

I will use OAUTH to allow users to create an account by simply providing other account details. This means I won't need anything else than the authorization token for each user, hence limiting the amount of sensitive information stored in the database.

When it comes to what sort of data is collected, I am going to stick to the bare minimum. Only the name of a person will be necessary to build the tree, year of birth and location will be optional. The data collected will need to be encrypted instead of being stored in a plain text. This will be an exciting challenge when it comes to actually implement it in Laravel!

The user will also have the option to modify or delete all data, or download it as a text file.

One point I'm not quite sure about is how to approach the consent of living people being added to the family tree by the user. I will have to stipulate that the user will remain fully responsible for the information added to the tree and they will also be responsible to obtain consent from these people. 

I am sure that, as I work on the app, new scenarios will arise that will make me re-evaluate my GDPR strategy. This is just the first stage, and I welcome any feedback you may have! Please get in touch with me either on [Twitter](https://www.twitter.com/zk433), or by sending me an email through my [contact form](/contact). 

__________
_Resources:_
- [EU GDPR](https://eugdpr.org/)
- [Geneanet](https://en.geneanet.org/genealogyblog/post/2018/07/what-are-the-gdpr-effects-for-genealogists)
- [FindMyPast](https://www.findmypast.co.uk/frequently-asked-questions/answer/what-does-gdpr-mean-for-my-family-history-research-will-you-be-removing-records-from-the-site)
- [TechBeacon](https://techbeacon.com/security/15-steps-developing-gdpr-compliant-apps)



