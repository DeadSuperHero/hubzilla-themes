Hubzilla Themes!
================

## Quick Note 
These themes were originally designed for an older build of Hubzilla, and are in the process of being updated.
At the moment, only __Suckerberg__ and __Clarity__ are compatible with Hubzilla 2.8

[Hubzilla](http://hubzilla.org) is a content management platform with social features and web-scale ACL for privacy. It is decentralized, compatible with [Diaspora](https://diasporafoundation.org) (in terms of federation), and highly customizable.

The goal of this repo is to hack on the default base theme (RedBasic) and produce many different styles to choose from. Part of the current fun is in emulating the styles of existing centralized social networks, to drive the point home about how decentralization can benefit everyone using the platform.

This readme is in the process of being updated. Keep an eye out for new themes!


### Installation
Theme files for hubzilla need to live in the __/view/theme/__ directory of your
Hubzilla installation. One straightforward way is to simply SSH into that directory
and simply git clone this repo.

For a straightforward workaround, you can use the `add_theme_repo` and
`update_theme_repo` utility scripts that ship with Hubzilla. Just SSH into your
server and then run this command:
`./util/add_theme_repo git@github.com:DeadSuperHero/hubzilla-themes.git dsh`

to update your Hubzilla theme, simply type `./util/update_theme_repo dsh`


## Available Themes


### Sporadic
![Sporadic-Preview](https://github.com/DeadSuperHero/redmatrix-themes/blob/master/sporadic/img/screenshot.jpg)

A mutated clone of Diaspora's visual style.


### Sunbeam
![SunBeam-Preview](https://github.com/DeadSuperHero/redmatrix-themes/blob/master/sunbeam/img/screenshot.jpg)

My second favorite theme. Fairly original style inspiration.


### Stumble
![Stumble-Preview](https://github.com/DeadSuperHero/redmatrix-themes/blob/master/stumble/img/screenshot.jpg)

A drunken Tumblr clone.



### VeryKool
![VK-preview](https://github.com/DeadSuperHero/redmatrix-themes/blob/master/verykool/img/screenshot.jpg)

A visual clone of VK.com! This theme is currently highly experimental.


_Below are some older themes that need to be updated to work with the latest Hubzilla layout improvements. Changes are coming, and screenshots will be updated._

### Suckerberg
![SuckerBerg-Preview]()

This style is an emulation of Facebook's, and as such is intended to replicate the look and feel while also maintaining the default UX of RedMatrix. Currently, this is a work-in-progress, as development is in the evaluation phase for how far the style emulation should and can go. Some modification to underlying templates may be necessary.


### Nova
![Nova-Preview]()

Figured I'd go for something a little bit different for this one. Was originally conceived for a local hub for Peoria, Illinois.



### Occupant
![Occupant-Preview]()

An Occupy theme, originally developed for OccupySocial.org. If you have a local occupy group and want to run a hub for communication, this is for you!


### Yolo
![Yolo-Preview]()

A style imitation of Ello, because fuck Ello.


## Donate

I dedicate a lot of spare time to maintaining these themes. If you use them and like my work, please feel free to donate to my cause in the following manners:

* Bitcoin: 1EV6EH67eY2UfF1kewmHmNXCsoXN3CWzBM
* PayPal: sean@deadsuperhero.com
