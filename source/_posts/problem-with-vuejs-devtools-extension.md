---
extends: _layouts.post
section: content
title: Learning VueJS - problem with VueJS devtools extension
date: 2019-01-20
description: ILearning VueJS - problem with VueJS devtools extension
cover_image: 
categories: [development, vue]
---
> Error: Vue.js is detected on this page. Devtools inspection is not available because it’s in production mode or explicitly disabled by the author.

Installed VueJS devtools but get the above error?

Chances are you are linking to a minified version to VueJS. Like I was :).
Change this:

`<script type="text/javascript" src="node_modules/vue/dist/vue.min.js"></script>`

To this:

`<script type="text/javascript" src="node_modules/vue/dist/vue.js"></script>`

If the Vue tab does not show in the devtools, either refresh the browser, or disable and enable the VueJS addon. This is usually all it takes for the tab to show up.

