
# Shared House Cleaning and Management App
(BeRoomies App)
### App Overview

**Title:** Shared House Cleaning and Management App

**Purpose:**  
The app manages shared house cleaning tasks, fines, and funding contributions, while encouraging collaboration and engagement through gamification and rewards. It also allows housemates to manage their availability and swap tasks with one another.

### Key Features:

-   **Task Management:** Assign and track house cleaning tasks.
-   **Fine Management:** Issue fines for missed tasks.
-   **Funding Contributions:** Manage voluntary contributions and fines for household supplies and fun house events.
-   **Gamification:** Points system, leaderboards, house goals, and achievements.
-   **Availability Management:** Users can lock their availability when they’re away, ensuring they don’t get assigned tasks during that time.
-   **Task Swapping:** Users can swap tasks with others, enabling flexibility and preference-based task management.

### User Roles and Permissions

#### **Admin Role:**

Admins are responsible for managing the house. They can:

-   Create and assign cleaning tasks to housemates.
-   Manage the funding pot (track contributions and approve purchases).
-   Issue fines for missed tasks.
-   Set house-wide goals and challenges.
-   Approve task swaps between housemates.

#### **Collaborator Role (Housemate):**

Collaborators are regular housemates with the following abilities:

-   View and complete assigned tasks.
-   Earn points for completing tasks and contributing to the funding pot.
-   Mark themselves as unavailable when they are away.
-   Swap tasks with other housemates if they prefer different responsibilities.
-   Participate in challenges and vote on house events.

### New Features: Availability and Task Swapping

#### **1. Availability Management**

Housemates can mark themselves as unavailable when they are away, ensuring they won’t be assigned tasks during that time.

**How it works:**

-   **Setting Availability:** Collaborators can lock their availability for specific dates (e.g., if they are going on vacation).
-   **Task Reassignment:** When a user locks their availability, their assigned tasks are automatically reassigned to available housemates by the admin.
-   **Notifications:** Admins and other housemates are notified when someone marks themselves unavailable, ensuring tasks can be reassigned or swapped.

**Design Considerations:**

-   **Availability Calendar:** A simple calendar view where users can select the dates they are unavailable.
-   **Task Reassignment:** If the admin wants, tasks for unavailable users can be reassigned automatically to other housemates or managed manually.

#### **2. Task Swapping**

Housemates can swap tasks with each other if they prefer different responsibilities or cannot complete their assigned task.

**How it works:**

-   **Propose a Swap:** Collaborators can propose a task swap to another housemate who has a different task.
-   **Approval:** Once a swap is proposed, the other housemate must approve the swap for it to take effect. Admins may be notified for oversight.
-   **Incentives for Swapping:** Swapping tasks still allows users to earn points for completed tasks, so there is no penalty for trading responsibilities.

**Design Considerations:**

-   **Swap Request Button:** On the task detail page, a button allows housemates to request a swap for that task.
-   **Swap Approval System:** Once a swap is proposed, the recipient is notified and can accept or reject the swap.
-   **Admin Oversight:** Admins can have the option to review or approve swaps, ensuring fairness.

### App Features

#### **1. Task Management**

-   Admins create and assign tasks to housemates.
-   Collaborators can view and complete tasks and propose swaps.
-   Users can mark themselves unavailable when they’re away to avoid being assigned tasks.
-   Task completion earns points that contribute to house goals.

#### **2. Fines and Funding Pot**

-   Fines for missed tasks are added to the funding pot.
-   Voluntary contributions to the pot can be used for cleaning supplies or fun events.
-   Housemates can vote on how to use the funding pot for fun activities.

#### **3. Gamification Features**

-   **Points System:** Earn points for completing tasks and contributing to the funding pot.
-   **Leaderboards:** Rank housemates by task completion and contributions.
-   **Collective Goals:** House goals for task completion or fundraising toward house events.
-   **Achievements:** Earn badges for reaching milestones, such as completing 10 tasks in a week.
-   **Voting for House Events:** Housemates vote on how to spend the funding pot.

### Progressive Web App (PWA) Functionality

-   **Responsive Design:** Ensure the app works seamlessly across desktops, tablets, and mobile devices.
-   **Installable:** The app can be installed on users' home screens.
-   **Offline Access:** View and complete tasks offline with data syncing once the user reconnects.
-   **Push Notifications:** Send push notifications for task reminders, missed deadlines, task swaps, and availability changes.

### Design Guidelines

#### **1. User Interface (UI)**

-   **Availability Calendar:** Users can select dates on a calendar to lock their availability.
-   **Swap Requests:** A clear button to propose a task swap should be placed on the task detail screen.
-   **Notifications:** Ensure push notifications are sent for proposed task swaps, swap approvals, and availability changes.

#### **2. Key Screens to Design**

-   **Dashboard:** Shows upcoming tasks, current funding pot, and house goals.
-   **Task Detail Screen:** Includes the task description, deadline, and a button to request a swap.
-   **Funding Pot Screen:** Shows contributions and how much has been raised for house events.
-   **Availability Calendar:** Users can select dates they are unavailable, and this will prevent them from being assigned tasks during those dates.

### Technical Considerations for Developers

#### **1. Tech Stack**

-   **Backend:** Vanilla PHP and MySQL for task and user management, fines, and funding pot.
-   **Frontend:** Vue.js or a similar framework with PWA functionality.
-   **PWA Integration:** Use service workers for offline functionality and push notifications.

### Conclusion

The updated app provides even more flexibility for housemates through the addition of availability management and task swapping. These features ensure that everyone can collaborate effectively, even when some housemates are away or prefer different tasks. This, combined with gamification elements, ensures a fun, engaging experience that encourages participation.
