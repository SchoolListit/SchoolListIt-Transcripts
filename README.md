# SchoolListIt Transcripts

## Blockchain validated transcript belonging to the student (not a school or teacher)
SchoolListIt Transcripts approaches the idea of student transcripting totally fresh. We started with a blank chalkboard and asked the question - "To whom does a transcript belong?". The clear answer is that a transcript belongs to a student, and therefore that student's parent until the student comes of age. 

Therein, the only proper and fair way to do that is to allow the parent to self-host the student's transcript and offer a secure way for schools and teachers to add grades into that transcript. When the child comes of age, the parent can transfer ownership of the domain to the student. 

Securing that with a blockchain that authenticates timestamp, revision history, and authorship of each entry provides the user of the transcript (admissions offices, parents, and future employers) a way to know that the entries are authentic. As a child grows from student to worker, entries can be added and maintained throughout life by the adult to whom that transcript belongs. 

Consider this kinds of like a child savings account. An adult can choose to withdrawl all the savings once they reach adulthood and do whatever they like with that money. But, wise adults use that nest egg to establish and continue saving and good financial management throughout thier life. The same is true of vital information, and SchoolListit Student transcripts is much better than what I was given ( a ziploc baggie with my SAT and Report cards ) - granted it worked. we still have it in a safe - hehe. Maybe the paper copy is more special. It has the memory of my mom attached, and notes from her to me. That ziploc baddie contains real treasure. A permanant reminder of how proud momma is of me, even if she isn't here to tell me herself. 

So, this plugin also creates a post type "mommy & daddy notes" - it must. And when I use it I think I should handwrite the notes to my kiddos. If only we could nail internet smells. What I wouldn't give to remember her scent. Mom, I miss you and love you so. 

**Teachers and parents are gonna love this!**

## How it works
Through this plugin, SchoolListIt is able to send broadcast and individual messages from teacher (or school) to their network of followers and tailor those communications to originate in the teachers preferred channel and arrive in the Parent's preffered channel.

We know that parents are splintered onto many different channels, and teachers have trouble communicating in so many different ways. But, parents are busy and also monitoring many channels. The channel changer facilitates parental involvement by meeting parents where they are and streamlining that for the school administration and teachers. 

- teachers can stay in thier prefferred format
- parents never miss important messages because they were sent via a channelthey dont really monitor
- all communications can be tracked
- analytics can provide feedback on the effectiveness of parent - teacher communication
- teachers have access to communication automation via direct messaging, trigger workflows, and broadcasting tools

# Installation

1.  zip file
2. Open your wordpress dashboard - the wp-admin page on most sites - and click upload.
3. Install and Activate.

## Activation
On plugin activation, a notification is sent to the SchoolListit app asking each connected user to choose thier preferred channel. From there, this plugin acts as a channel changer changing the originating channel to the destination channel via Twilio's PHP SDK. Establishing a 'classroom' set of numbers and contact information liberates the teachers personal cell phones, social profiles, and emails from parent communications and enables the school and teacher to better keep track communications between parent and teacher as these are naturally stored in twilio's history and analytics. 

### Settings
Follow plugin setup and complete all settings required within the admin dashboard. This includes providing access to social accounts, etc needed for twilio to send messages on your behalf. 

### That's it.
You now have access to the channel changer. To create outgoing messages, do that through the Channel Changer dashboard page. All incoming messages will arrive in your referred channel so you never miss a message from a parent.

## Usage

NOTE: Twilio account required

NOTE: Any channel that you enable must have a 'classroom' profile. For example, if you'd like to enable the messenger channel, you must have a messenger account which twilio can use to send messages on your behalf. 

NOTE: You may need your server admin team to get involved. This plugin requires the Twilio SDK via composer to work. Sometimes certain hosts have blocked permissions for this setup automatically.

## Contributing
TODO: everything. I've created this very minimal approach to building plugins wihtout so much boilerplate abstraction. So, we are set up to build this, but it is not built. 

TODO: I've got older plugins I've built for marketing which have all the twilio integrations, but we need to carefully consider how to best use this tech without overwhelming teachers. My gut tells me that the plugin needs to be very opinioonated with few options and no administration. Teachers dont have time to mess with it...they just need to save time.

OPPORTUNITY: There is an opportunity for an ecosystem company to get involved here providing the 'setup' service for teachers and schools...establishing social accounts, reading analytics, providing feedback, creating automation and trigger campaigns for teachers. 

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[GPL2+](http://www.gnu.org/licenses/gpl-3.0.html) 
 SchoolListIt Channel Changer is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 2 of the License, or
 any later version.

SchoolListIt Channel Changer is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with SchoolListIt Channel Changer. If not, see [GPL2+](http://www.gnu.org/licenses/gpl-3.0.html) 
