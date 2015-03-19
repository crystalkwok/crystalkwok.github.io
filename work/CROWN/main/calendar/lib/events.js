/********************************************************************************
 *priority 0 is low, 1 is medium, 2 is high                                     *
 *we can add any other variables we need, maybe checking if it's a goal?        *
 *if there is no end time for the event it will just show up as an all day event*
 ********************************************************************************/

function getEvents() {
    
    return [
			{
        		title: "Church with Family",
                start: "2014-09-07T10:30:00",
                end: "2014-09-07T12:30:00",
        		priority: "0",
        		description: "The Rock Church, Point Loma"
   		 	},
			{
                title: "John's Wedding",
                start: "2014-09-07T13:00:00",
                end: "2014-09-07T17:30:00",
                priority: "2",
                description: "RB Inn"
            },
			{
                title: "Study Time for Cogs 18 Midterm",
                start: "2014-09-07T19:30:00",
                end: "2014-09-07T22:30:00",
                priority: "0",
                description: "Chapters 14-18"
            },
			{
        		title: "Interview with Mission Bay Transport Services via Skype",
                start: "2014-09-08",
        		priority: "1",
        		description: "CSB 180"
   		 	},
			{
        		title: "COGS 120 Lecture",
                start: "2014-09-08T10:00:00",
                end: "2014-09-08T10:50:00",
        		priority: "0",
        		description: "CSB 180"
   		 	},
			{
        		title: "Math 20D Discussion",
                start: "2014-09-08T11:00:00",
                end: "2014-09-08T11:50:00",
        		priority: "0",
        		description: "CTR 115"
   		 	},
			{
        		title: "Hum 3 Lecture",
                start: "2014-09-08T12:00:00",
                end: "2014-09-08T12:50:00",
        		priority: "0",
        		description: "GALBRAITH 212"
   		 	},
            {
                title: "CSE 18 Midterm",
                start: "2014-09-08T13:00:00",
                end: "2014-09-08T13:50:00",
                priority: "1",
                description: "CTR 101"
            },
            {
                title: "Study Time for LING 1D",
                start: "2014-09-08T14:00:00",
                end: "2014-09-08T15:50:00",
                priority: "0",
                description: "Read Chapter 4, Outline Sections 8a-9bb, Make Flashcards"
            },
            {
                title: "LING 1D Quiz",
                start: "2014-09-09T10:00:00",
                end: "2014-09-09T10:50:00",
                priority: "1",
                description: "Good luck!"
            },
            {
                title: "Internship at Office",
                start: "2014-09-09T11:15:00",
                end: "2014-09-09T13:00:00",
                priority: "0",
                description: "Carl Demaio for Congress"
            },
            {
                title: "Optometrist Appointment",
                start: "2014-09-09T13:30:00",
                end: "2014-09-09T14:30:00",
                priority: "1",
                description: "Carl Demaio for Congress"
            },
            {
                title: "Date Night!",
                start: "2014-09-09T17:30:00",
                end: "2014-09-09T22:30:00",
                priority: "1",
                description: "Claire De Lune"
            },
            {
                title: "Goal Reminder: Lose 5 pounds!",
                start: "2014-09-10T7:30:00",
                end: "2014-09-10T8:30:00",
                priority: "1",
                description: "You want to lose 5 pounds by the end of the summer.\
                        Keep it up!"
            },
			{
        		title: "COGS 120 Lecture",
                start: "2014-09-10T10:00:00",
                end: "2014-09-10T10:50:00",
        		priority: "0",
        		description: "CSB 180"
   		 	},
			{
        		title: "Math 20D Discussion",
                start: "2014-09-10T11:00:00",
                end: "2014-09-10T11:50:00",
        		priority: "0",
        		description: "CTR 115"
   		 	},
			{
        		title: "Hum 3 Lecture",
                start: "2014-09-10T12:00:00",
                end: "2014-09-10T12:50:00",
        		priority: "0",
        		description: "GALBRAITH 212"
   		 	},
            {
                title: "CSE 18 Lecture",
                start: "2014-09-10T13:00:00",
                end: "2014-09-10T13:50:00",
                priority: "0",
                description: "CTR 101"
            },
            {
                title: "LING 1D Discussion",
                start: "2014-09-11T10:00:00",
                end: "2014-09-11T10:50:00",
                priority: "0",
                description: "Check update on Quiz grading"
            },
            {
                title: "Internship at Office",
                start: "2014-09-11T11:15:00",
                end: "2014-09-11T13:00:00",
                priority: "0",
                description: "Carl Demaio for Congress"
            },
            {
                title: "Trumpet Practice",
                start: "2014-09-11T14:30:00",
				end: "2014-09-11T15:30:00",
                priority: "0",
                description: "Mrs. Galleger's House"
            },
			{
        		title: "CSE 18 Midterm",
                start: "2014-09-11T10:00:00",
                end: "2014-09-11T10:50:00",
        		priority: "2",
        		description: "CSB 180"
   		 	},
			{
        		title: "Math 20D Discussion",
                start: "2014-09-12T11:00:00",
                end: "2014-09-12T11:50:00",
        		priority: "0",
        		description: "CTR 115"
   		 	},
			{
        		title: "Hum 3 Lecture",
                start: "2014-09-12T12:00:00",
                end: "2014-09-12T12:50:00",
        		priority: "0",
        		description: "GALBRAITH 212"
   		 	},
            {
                title: "CSE 18 Lecture",
                start: "2014-09-12T13:00:00",
                end: "2014-09-12T13:50:00",
                priority: "0",
                description: "CTR 101"
            },
			{
        		title: "Church with Family",
                start: "2014-09-14T10:30:00",
                end: "2014-09-14T12:30:00",
        		priority: "0",
        		description: "The Rock Church, Point Loma"
   		 	},
			{
                title: "Hannah's Wedding",
                start: "2014-09-14T13:00:00",
                end: "2014-09-14T17:30:00",
                priority: "2",
                description: "RB Inn"
            },
			{
                title: "Study Time for Cogs 18 Midterm",
                start: "2014-09-14T19:30:00",
                end: "2014-09-14T22:30:00",
                priority: "0",
                description: "Chapters 14-18"
            },
			{
        		title: "Interview with Mission Bay Transport Services via Skype",
                start: "2014-09-15",
        		priority: "1",
        		description: "CSB 180"
   		 	},
			{
        		title: "COGS 120 Lecture",
                start: "2014-09-15T10:00:00",
                end: "2014-09-15T10:50:00",
        		priority: "0",
        		description: "CSB 180"
   		 	},
			{
        		title: "Math 20D Discussion",
                start: "2014-09-15T11:00:00",
                end: "2014-09-15T11:50:00",
        		priority: "0",
        		description: "CTR 115"
   		 	},
			{
        		title: "Hum 3 Lecture",
                start: "2014-09-15T12:00:00",
                end: "2014-09-15T12:50:00",
        		priority: "0",
        		description: "GALBRAITH 212"
   		 	},
            {
                title: "CSE 18 Midterm",
                start: "2014-09-15T13:00:00",
                end: "2014-09-15T13:50:00",
                priority: "1",
                description: "CTR 101"
            },
            {
                title: "Study Time for LING 1D",
                start: "2014-09-15T14:00:00",
                end: "2014-09-15T15:50:00",
                priority: "0",
                description: "Read Chapter 4, Outline Sections 8a-9bb, Make Flashcards"
            },
            {
                title: "LING 1D Quiz",
                start: "2014-09-16T10:00:00",
                end: "2014-09-16T10:50:00",
                priority: "1",
                description: "Good luck!"
            },
            {
                title: "Internship at Office",
                start: "2014-09-16T11:15:00",
                end: "2014-09-16T13:00:00",
                priority: "0",
                description: "Carl Demaio for Congress"
            },
            {
                title: "Optometrist Appointment",
                start: "2014-09-16T13:30:00",
                end: "2014-09-16T14:30:00",
                priority: "1",
                description: "Carl Demaio for Congress"
            },
            {
                title: "Date Night!",
                start: "2014-09-16T17:30:00",
                end: "2014-09-16T22:30:00",
                priority: "1",
                description: "Claire De Lune"
            },
            {
                title: "Goal Reminder: Lose 5 pounds!",
                start: "2014-09-17T7:30:00",
                end: "2014-09-17T8:30:00",
                priority: "1",
                description: "You want to lose 5 pounds by the end of the summer.\
                        Keep it up!"
            },
			{
        		title: "COGS 120 Lecture",
                start: "2014-09-17T10:00:00",
                end: "2014-09-17T10:50:00",
        		priority: "0",
        		description: "CSB 180"
   		 	},
			{
        		title: "Math 20D Discussion",
                start: "2014-09-17T11:00:00",
                end: "2014-09-17T11:50:00",
        		priority: "0",
        		description: "CTR 115"
   		 	},
			{
        		title: "Hum 3 Lecture",
                start: "2014-09-17T12:00:00",
                end: "2014-09-17T12:50:00",
        		priority: "0",
        		description: "GALBRAITH 212"
   		 	},
            {
                title: "CSE 18 Lecture",
                start: "2014-09-17T13:00:00",
                end: "2014-09-17T13:50:00",
                priority: "0",
                description: "CTR 101"
            },
            {
                title: "LING 1D Discussion",
                start: "2014-09-18T10:00:00",
                end: "2014-09-18T10:50:00",
                priority: "0",
                description: "Check update on Quiz grading"
            },
            {
                title: "Internship at Office",
                start: "2014-09-18T11:15:00",
                end: "2014-09-18T13:00:00",
                priority: "0",
                description: "Carl Demaio for Congress"
            },
            {
                title: "Trumpet Practice",
                start: "2014-09-18T14:30:00",
				end: "2014-09-18T15:30:00",
                priority: "0",
                description: "Mrs. Galleger's House"
            },
			{
        		title: "COGS 120 Final",
                start: "2014-09-18T10:00:00",
                end: "2014-09-18T10:50:00",
        		priority: "2",
        		description: "CSB 180"
   		 	},
			{
        		title: "Math 20D Discussion",
                start: "2014-09-19T11:00:00",
                end: "2014-09-19T11:50:00",
        		priority: "0",
        		description: "CTR 115"
   		 	},
			{
        		title: "Hum 3 Lecture",
                start: "2014-09-19T12:00:00",
                end: "2014-09-19T12:50:00",
        		priority: "0",
        		description: "GALBRAITH 212"
   		 	},
            {
                title: "CSE 18 Lecture",
                start: "2014-09-19T13:00:00",
                end: "2014-09-19T13:50:00",
                priority: "0",
                description: "CTR 101"
            },
            {
                title: "Lasic Surgery",
                start: "2014-09-19T14:30:00",
				end: "2014-09-19T17:00:00",
                priority: "2",
                description: "Dr. Sloan's Office"
            },
];
}
