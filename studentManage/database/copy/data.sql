-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2012 at 08:50 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `os_new`
--

--
-- Dumping data for table `additional_exams`
--


--
-- Dumping data for table `additional_exam_groups`
--


--
-- Dumping data for table `additional_exam_scores`
--


--
-- Dumping data for table `additional_fields`
--


--
-- Dumping data for table `apply_leaves`
--


--
-- Dumping data for table `archived_employees`
--


--
-- Dumping data for table `archived_employee_additional_details`
--


--
-- Dumping data for table `archived_employee_bank_details`
--


--
-- Dumping data for table `archived_employee_salary_structures`
--


--
-- Dumping data for table `archived_exam_scores`
--


--
-- Dumping data for table `archived_guardians`
--


--
-- Dumping data for table `archived_students`
--


--
-- Dumping data for table `assets`
--


--
-- Dumping data for table `attendances`
--


--
-- Dumping data for table `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Admin', '1', NULL, 'N;'),
('Admin', '3', NULL, 'N;'),
('parent', '4', NULL, 'N;'),
('Students.Students.*', '4', NULL, 'N;');

--
-- Dumping data for table `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Accounting.*', 1, NULL, NULL, 'N;'),
('Accounting.Add', 0, NULL, NULL, 'N;'),
('Accounting.Admin', 0, NULL, NULL, 'N;'),
('Accounting.Assesments', 0, NULL, NULL, 'N;'),
('Accounting.Attentance', 0, NULL, NULL, 'N;'),
('Accounting.Batch', 0, NULL, NULL, 'N;'),
('Accounting.Create', 0, NULL, NULL, 'N;'),
('Accounting.Delete', 0, NULL, NULL, 'N;'),
('Accounting.Events', 0, NULL, NULL, 'N;'),
('Accounting.Index', 0, NULL, NULL, 'N;'),
('Accounting.Manage', 0, NULL, NULL, 'N;'),
('Accounting.Savesearch', 0, NULL, NULL, 'N;'),
('Accounting.Update', 0, NULL, NULL, 'N;'),
('Accounting.View', 0, NULL, NULL, 'N;'),
('Accounting.Website', 0, NULL, NULL, 'N;'),
('Admin', 2, NULL, NULL, 'N;'),
('Assesments.*', 1, NULL, NULL, 'N;'),
('Assesments.Add', 0, NULL, NULL, 'N;'),
('Assesments.Admin', 0, NULL, NULL, 'N;'),
('Assesments.Assesments', 0, NULL, NULL, 'N;'),
('Assesments.Attentance', 0, NULL, NULL, 'N;'),
('Assesments.Batch', 0, NULL, NULL, 'N;'),
('Assesments.Create', 0, NULL, NULL, 'N;'),
('Assesments.Delete', 0, NULL, NULL, 'N;'),
('Assesments.Events', 0, NULL, NULL, 'N;'),
('Assesments.Index', 0, NULL, NULL, 'N;'),
('Assesments.Manage', 0, NULL, NULL, 'N;'),
('Assesments.Savesearch', 0, NULL, NULL, 'N;'),
('Assesments.Update', 0, NULL, NULL, 'N;'),
('Assesments.View', 0, NULL, NULL, 'N;'),
('Assesments.Website', 0, NULL, NULL, 'N;'),
('Attendances.*', 1, NULL, NULL, 'N;'),
('Attendances.Addnew', 0, NULL, NULL, 'N;'),
('Attendances.Attentance', 0, NULL, NULL, 'N;'),
('Attendances.Index', 0, NULL, NULL, 'N;'),
('Attendances.ReturnForm', 0, NULL, NULL, 'N;'),
('Attendances.ReturnView', 0, NULL, NULL, 'N;'),
('Authenticated', 2, NULL, NULL, 'N;'),
('Cal.Cron.*', 1, NULL, NULL, 'N;'),
('Cal.Cron.Index', 0, NULL, NULL, 'N;'),
('Cal.Main.*', 1, NULL, NULL, 'N;'),
('Cal.Main.Browse', 0, NULL, NULL, 'N;'),
('Cal.Main.CreateHelper', 0, NULL, NULL, 'N;'),
('Cal.Main.List', 0, NULL, NULL, 'N;'),
('Cal.Main.Move', 0, NULL, NULL, 'N;'),
('Cal.Main.RemoveHelper', 0, NULL, NULL, 'N;'),
('Cal.Main.Resize', 0, NULL, NULL, 'N;'),
('Cal.Main.Update', 0, NULL, NULL, 'N;'),
('Cal.Main.Userpreference', 0, NULL, NULL, 'N;'),
('CmsNode.*', 1, NULL, NULL, 'N;'),
('CmsNode.Admin', 0, NULL, NULL, 'N;'),
('CmsNode.Create', 0, NULL, NULL, 'N;'),
('CmsNode.Delete', 0, NULL, NULL, 'N;'),
('CmsNode.Index', 0, NULL, NULL, 'N;'),
('CmsNode.Update', 0, NULL, NULL, 'N;'),
('CmsNode.View', 0, NULL, NULL, 'N;'),
('Configurations.*', 1, NULL, NULL, 'N;'),
('Configurations.Admin', 0, NULL, NULL, 'N;'),
('Configurations.Create', 0, NULL, NULL, 'N;'),
('Configurations.Delete', 0, NULL, NULL, 'N;'),
('Configurations.DisplaySavedImage', 0, NULL, NULL, 'N;'),
('Configurations.Index', 0, NULL, NULL, 'N;'),
('Configurations.Remove', 0, NULL, NULL, 'N;'),
('Configurations.Setup', 0, NULL, NULL, 'N;'),
('Configurations.Update', 0, NULL, NULL, 'N;'),
('Configurations.View', 0, NULL, NULL, 'N;'),
('Countries.*', 1, NULL, NULL, 'N;'),
('Countries.Admin', 0, NULL, NULL, 'N;'),
('Countries.Create', 0, NULL, NULL, 'N;'),
('Countries.Delete', 0, NULL, NULL, 'N;'),
('Countries.Index', 0, NULL, NULL, 'N;'),
('Countries.Update', 0, NULL, NULL, 'N;'),
('Countries.View', 0, NULL, NULL, 'N;'),
('Courses.*', 1, NULL, NULL, 'N;'),
('Courses.Admin', 0, NULL, NULL, 'N;'),
('Courses.Batches.*', 1, NULL, NULL, 'N;'),
('Courses.Batches.Activate', 0, NULL, NULL, 'N;'),
('Courses.Batches.Addnew', 0, NULL, NULL, 'N;'),
('Courses.Batches.Addupdate', 0, NULL, NULL, 'N;'),
('Courses.Batches.Admin', 0, NULL, NULL, 'N;'),
('Courses.Batches.Batchstudents', 0, NULL, NULL, 'N;'),
('Courses.Batches.Create', 0, NULL, NULL, 'N;'),
('Courses.Batches.Deactivate', 0, NULL, NULL, 'N;'),
('Courses.Batches.Delete', 0, NULL, NULL, 'N;'),
('Courses.Batches.Index', 0, NULL, NULL, 'N;'),
('Courses.Batches.Manage', 0, NULL, NULL, 'N;'),
('Courses.Batches.Promote', 0, NULL, NULL, 'N;'),
('Courses.Batches.Remove', 0, NULL, NULL, 'N;'),
('Courses.Batches.Settings', 0, NULL, NULL, 'N;'),
('Courses.Batches.Update', 0, NULL, NULL, 'N;'),
('Courses.Batches.View', 0, NULL, NULL, 'N;'),
('Courses.ClassTiming.*', 1, NULL, NULL, 'N;'),
('Courses.ClassTiming.Index', 0, NULL, NULL, 'N;'),
('Courses.ClassTiming.ReturnForm', 0, NULL, NULL, 'N;'),
('Courses.ClassTiming.ReturnView', 0, NULL, NULL, 'N;'),
('Courses.ClassTimings.*', 1, NULL, NULL, 'N;'),
('Courses.ClassTimings.Addnew', 0, NULL, NULL, 'N;'),
('Courses.ClassTimings.Admin', 0, NULL, NULL, 'N;'),
('Courses.ClassTimings.Create', 0, NULL, NULL, 'N;'),
('Courses.ClassTimings.Delete', 0, NULL, NULL, 'N;'),
('Courses.ClassTimings.Edit', 0, NULL, NULL, 'N;'),
('Courses.ClassTimings.Index', 0, NULL, NULL, 'N;'),
('Courses.ClassTimings.Update', 0, NULL, NULL, 'N;'),
('Courses.ClassTimings.View', 0, NULL, NULL, 'N;'),
('Courses.Courses.*', 1, NULL, NULL, 'N;'),
('Courses.Courses.Admin', 0, NULL, NULL, 'N;'),
('Courses.Courses.Create', 0, NULL, NULL, 'N;'),
('Courses.Courses.Delete', 0, NULL, NULL, 'N;'),
('Courses.Courses.Edit', 0, NULL, NULL, 'N;'),
('Courses.Courses.Index', 0, NULL, NULL, 'N;'),
('Courses.Courses.Managecourse', 0, NULL, NULL, 'N;'),
('Courses.Courses.ReqTest01', 0, NULL, NULL, 'N;'),
('Courses.Courses.Update', 0, NULL, NULL, 'N;'),
('Courses.Courses.View', 0, NULL, NULL, 'N;'),
('Courses.Create', 0, NULL, NULL, 'N;'),
('Courses.Default.*', 1, NULL, NULL, 'N;'),
('Courses.Default.Index', 0, NULL, NULL, 'N;'),
('Courses.Defaultsubjects.*', 1, NULL, NULL, 'N;'),
('Courses.Defaultsubjects.Index', 0, NULL, NULL, 'N;'),
('Courses.Defaultsubjects.ReturnForm', 0, NULL, NULL, 'N;'),
('Courses.Defaultsubjects.ReturnView', 0, NULL, NULL, 'N;'),
('Courses.Delete', 0, NULL, NULL, 'N;'),
('Courses.Edit', 0, NULL, NULL, 'N;'),
('Courses.ElectiveGroups.*', 1, NULL, NULL, 'N;'),
('Courses.ElectiveGroups.Admin', 0, NULL, NULL, 'N;'),
('Courses.ElectiveGroups.Create', 0, NULL, NULL, 'N;'),
('Courses.ElectiveGroups.Delete', 0, NULL, NULL, 'N;'),
('Courses.ElectiveGroups.Index', 0, NULL, NULL, 'N;'),
('Courses.ElectiveGroups.Update', 0, NULL, NULL, 'N;'),
('Courses.ElectiveGroups.View', 0, NULL, NULL, 'N;'),
('Courses.Electives.*', 1, NULL, NULL, 'N;'),
('Courses.Electives.Admin', 0, NULL, NULL, 'N;'),
('Courses.Electives.Create', 0, NULL, NULL, 'N;'),
('Courses.Electives.Delete', 0, NULL, NULL, 'N;'),
('Courses.Electives.Index', 0, NULL, NULL, 'N;'),
('Courses.Electives.Update', 0, NULL, NULL, 'N;'),
('Courses.Electives.View', 0, NULL, NULL, 'N;'),
('Courses.Exam.*', 1, NULL, NULL, 'N;'),
('Courses.Exam.Index', 0, NULL, NULL, 'N;'),
('Courses.Exam.ReturnForm', 0, NULL, NULL, 'N;'),
('Courses.Exam.ReturnView', 0, NULL, NULL, 'N;'),
('Courses.ExamGroups.*', 1, NULL, NULL, 'N;'),
('Courses.ExamGroups.Admin', 0, NULL, NULL, 'N;'),
('Courses.ExamGroups.Create', 0, NULL, NULL, 'N;'),
('Courses.ExamGroups.Delete', 0, NULL, NULL, 'N;'),
('Courses.ExamGroups.Deletenew', 0, NULL, NULL, 'N;'),
('Courses.ExamGroups.Index', 0, NULL, NULL, 'N;'),
('Courses.ExamGroups.Manage', 0, NULL, NULL, 'N;'),
('Courses.ExamGroups.Update', 0, NULL, NULL, 'N;'),
('Courses.ExamGroups.View', 0, NULL, NULL, 'N;'),
('Courses.Exams.*', 1, NULL, NULL, 'N;'),
('Courses.Exams.Admin', 0, NULL, NULL, 'N;'),
('Courses.Exams.Create', 0, NULL, NULL, 'N;'),
('Courses.Exams.Delete', 0, NULL, NULL, 'N;'),
('Courses.Exams.Index', 0, NULL, NULL, 'N;'),
('Courses.Exams.Manage', 0, NULL, NULL, 'N;'),
('Courses.Exams.Update', 0, NULL, NULL, 'N;'),
('Courses.Exams.View', 0, NULL, NULL, 'N;'),
('Courses.ExamScores.*', 1, NULL, NULL, 'N;'),
('Courses.ExamScores.Admin', 0, NULL, NULL, 'N;'),
('Courses.ExamScores.Create', 0, NULL, NULL, 'N;'),
('Courses.ExamScores.Delete', 0, NULL, NULL, 'N;'),
('Courses.ExamScores.Deleteall', 0, NULL, NULL, 'N;'),
('Courses.ExamScores.Index', 0, NULL, NULL, 'N;'),
('Courses.ExamScores.Pdf', 0, NULL, NULL, 'N;'),
('Courses.ExamScores.Update', 0, NULL, NULL, 'N;'),
('Courses.ExamScores.View', 0, NULL, NULL, 'N;'),
('Courses.GradingLevels.*', 1, NULL, NULL, 'N;'),
('Courses.GradingLevels.Default', 0, NULL, NULL, 'N;'),
('Courses.GradingLevels.Index', 0, NULL, NULL, 'N;'),
('Courses.GradingLevels.ReturnForm', 0, NULL, NULL, 'N;'),
('Courses.GradingLevels.ReturnView', 0, NULL, NULL, 'N;'),
('Courses.Index', 0, NULL, NULL, 'N;'),
('Courses.Managecourse', 0, NULL, NULL, 'N;'),
('Courses.ReqTest01', 0, NULL, NULL, 'N;'),
('Courses.StudentAttentance.*', 1, NULL, NULL, 'N;'),
('Courses.StudentAttentance.Addnew', 0, NULL, NULL, 'N;'),
('Courses.StudentAttentance.Admin', 0, NULL, NULL, 'N;'),
('Courses.StudentAttentance.Attentancepdf', 0, NULL, NULL, 'N;'),
('Courses.StudentAttentance.Attentstud', 0, NULL, NULL, 'N;'),
('Courses.StudentAttentance.Create', 0, NULL, NULL, 'N;'),
('Courses.StudentAttentance.Delete', 0, NULL, NULL, 'N;'),
('Courses.StudentAttentance.Index', 0, NULL, NULL, 'N;'),
('Courses.StudentAttentance.Pdf', 0, NULL, NULL, 'N;'),
('Courses.StudentAttentance.Pdf1', 0, NULL, NULL, 'N;'),
('Courses.StudentAttentance.Update', 0, NULL, NULL, 'N;'),
('Courses.StudentAttentance.View', 0, NULL, NULL, 'N;'),
('Courses.Subject.*', 1, NULL, NULL, 'N;'),
('Courses.Subject.Index', 0, NULL, NULL, 'N;'),
('Courses.Subject.ReturnForm', 0, NULL, NULL, 'N;'),
('Courses.Subject.ReturnView', 0, NULL, NULL, 'N;'),
('Courses.SubjectName.*', 1, NULL, NULL, 'N;'),
('Courses.SubjectName.Admin', 0, NULL, NULL, 'N;'),
('Courses.SubjectName.Create', 0, NULL, NULL, 'N;'),
('Courses.SubjectName.Delete', 0, NULL, NULL, 'N;'),
('Courses.SubjectName.Index', 0, NULL, NULL, 'N;'),
('Courses.SubjectName.Update', 0, NULL, NULL, 'N;'),
('Courses.SubjectName.View', 0, NULL, NULL, 'N;'),
('Courses.SubjectNameAjax.*', 1, NULL, NULL, 'N;'),
('Courses.SubjectNameAjax.Index', 0, NULL, NULL, 'N;'),
('Courses.SubjectNameAjax.ReturnForm', 0, NULL, NULL, 'N;'),
('Courses.SubjectNameAjax.ReturnView', 0, NULL, NULL, 'N;'),
('Courses.Subjects.*', 1, NULL, NULL, 'N;'),
('Courses.Subjects.Addnew', 0, NULL, NULL, 'N;'),
('Courses.Subjects.Addnew1', 0, NULL, NULL, 'N;'),
('Courses.Subjects.Admin', 0, NULL, NULL, 'N;'),
('Courses.Subjects.Create', 0, NULL, NULL, 'N;'),
('Courses.Subjects.Delete', 0, NULL, NULL, 'N;'),
('Courses.Subjects.Index', 0, NULL, NULL, 'N;'),
('Courses.Subjects.Subjects', 0, NULL, NULL, 'N;'),
('Courses.Subjects.Update', 0, NULL, NULL, 'N;'),
('Courses.Subjects.View', 0, NULL, NULL, 'N;'),
('Courses.TimetableEntries.*', 1, NULL, NULL, 'N;'),
('Courses.TimetableEntries.Admin', 0, NULL, NULL, 'N;'),
('Courses.TimetableEntries.Create', 0, NULL, NULL, 'N;'),
('Courses.TimetableEntries.Delete', 0, NULL, NULL, 'N;'),
('Courses.TimetableEntries.Dynamiccities', 0, NULL, NULL, 'N;'),
('Courses.TimetableEntries.Index', 0, NULL, NULL, 'N;'),
('Courses.TimetableEntries.Settime', 0, NULL, NULL, 'N;'),
('Courses.TimetableEntries.Update', 0, NULL, NULL, 'N;'),
('Courses.TimetableEntries.View', 0, NULL, NULL, 'N;'),
('Courses.Update', 0, NULL, NULL, 'N;'),
('Courses.View', 0, NULL, NULL, 'N;'),
('Courses.Weekdays.*', 1, NULL, NULL, 'N;'),
('Courses.Weekdays.Addnew', 0, NULL, NULL, 'N;'),
('Courses.Weekdays.Admin', 0, NULL, NULL, 'N;'),
('Courses.Weekdays.Batch', 0, NULL, NULL, 'N;'),
('Courses.Weekdays.Create', 0, NULL, NULL, 'N;'),
('Courses.Weekdays.Delete', 0, NULL, NULL, 'N;'),
('Courses.Weekdays.Exportpdf', 0, NULL, NULL, 'N;'),
('Courses.Weekdays.Index', 0, NULL, NULL, 'N;'),
('Courses.Weekdays.Pdf', 0, NULL, NULL, 'N;'),
('Courses.Weekdays.Publish', 0, NULL, NULL, 'N;'),
('Courses.Weekdays.Timetable', 0, NULL, NULL, 'N;'),
('Courses.Weekdays.Update', 0, NULL, NULL, 'N;'),
('Courses.Weekdays.View', 0, NULL, NULL, 'N;'),
('Dashboard.Default.*', 1, NULL, NULL, 'N;'),
('Dashboard.Default.Calendar', 0, NULL, NULL, 'N;'),
('Dashboard.Default.Events', 0, NULL, NULL, 'N;'),
('Dashboard.Default.Index', 0, NULL, NULL, 'N;'),
('ElectiveGroups.*', 1, NULL, NULL, 'N;'),
('ElectiveGroups.Admin', 0, NULL, NULL, 'N;'),
('ElectiveGroups.Create', 0, NULL, NULL, 'N;'),
('ElectiveGroups.Delete', 0, NULL, NULL, 'N;'),
('ElectiveGroups.Index', 0, NULL, NULL, 'N;'),
('ElectiveGroups.Update', 0, NULL, NULL, 'N;'),
('ElectiveGroups.View', 0, NULL, NULL, 'N;'),
('Electives.*', 1, NULL, NULL, 'N;'),
('Electives.Admin', 0, NULL, NULL, 'N;'),
('Electives.Create', 0, NULL, NULL, 'N;'),
('Electives.Delete', 0, NULL, NULL, 'N;'),
('Electives.Index', 0, NULL, NULL, 'N;'),
('Electives.Update', 0, NULL, NULL, 'N;'),
('Electives.View', 0, NULL, NULL, 'N;'),
('Employees.Default.*', 1, NULL, NULL, 'N;'),
('Employees.Default.Index', 0, NULL, NULL, 'N;'),
('Employees.EmployeeAttendances.*', 1, NULL, NULL, 'N;'),
('Employees.EmployeeAttendances.Addnew', 0, NULL, NULL, 'N;'),
('Employees.EmployeeAttendances.Admin', 0, NULL, NULL, 'N;'),
('Employees.EmployeeAttendances.Create', 0, NULL, NULL, 'N;'),
('Employees.EmployeeAttendances.Delete', 0, NULL, NULL, 'N;'),
('Employees.EmployeeAttendances.Index', 0, NULL, NULL, 'N;'),
('Employees.EmployeeAttendances.Pdf', 0, NULL, NULL, 'N;'),
('Employees.EmployeeAttendances.Update', 0, NULL, NULL, 'N;'),
('Employees.EmployeeAttendances.View', 0, NULL, NULL, 'N;'),
('Employees.EmployeeCategories.*', 1, NULL, NULL, 'N;'),
('Employees.EmployeeCategories.Admin', 0, NULL, NULL, 'N;'),
('Employees.EmployeeCategories.Create', 0, NULL, NULL, 'N;'),
('Employees.EmployeeCategories.Delete', 0, NULL, NULL, 'N;'),
('Employees.EmployeeCategories.Index', 0, NULL, NULL, 'N;'),
('Employees.EmployeeCategories.Update', 0, NULL, NULL, 'N;'),
('Employees.EmployeeCategories.View', 0, NULL, NULL, 'N;'),
('Employees.EmployeeDepartments.*', 1, NULL, NULL, 'N;'),
('Employees.EmployeeDepartments.Admin', 0, NULL, NULL, 'N;'),
('Employees.EmployeeDepartments.Create', 0, NULL, NULL, 'N;'),
('Employees.EmployeeDepartments.Delete', 0, NULL, NULL, 'N;'),
('Employees.EmployeeDepartments.Index', 0, NULL, NULL, 'N;'),
('Employees.EmployeeDepartments.Update', 0, NULL, NULL, 'N;'),
('Employees.EmployeeDepartments.View', 0, NULL, NULL, 'N;'),
('Employees.EmployeeGrades.*', 1, NULL, NULL, 'N;'),
('Employees.EmployeeGrades.Admin', 0, NULL, NULL, 'N;'),
('Employees.EmployeeGrades.Create', 0, NULL, NULL, 'N;'),
('Employees.EmployeeGrades.Delete', 0, NULL, NULL, 'N;'),
('Employees.EmployeeGrades.Index', 0, NULL, NULL, 'N;'),
('Employees.EmployeeGrades.Update', 0, NULL, NULL, 'N;'),
('Employees.EmployeeGrades.View', 0, NULL, NULL, 'N;'),
('Employees.EmployeeLeaveTypes.*', 1, NULL, NULL, 'N;'),
('Employees.EmployeeLeaveTypes.Admin', 0, NULL, NULL, 'N;'),
('Employees.EmployeeLeaveTypes.Create', 0, NULL, NULL, 'N;'),
('Employees.EmployeeLeaveTypes.Delete', 0, NULL, NULL, 'N;'),
('Employees.EmployeeLeaveTypes.Index', 0, NULL, NULL, 'N;'),
('Employees.EmployeeLeaveTypes.Update', 0, NULL, NULL, 'N;'),
('Employees.EmployeeLeaveTypes.View', 0, NULL, NULL, 'N;'),
('Employees.EmployeePositions.*', 1, NULL, NULL, 'N;'),
('Employees.EmployeePositions.Admin', 0, NULL, NULL, 'N;'),
('Employees.EmployeePositions.Create', 0, NULL, NULL, 'N;'),
('Employees.EmployeePositions.Delete', 0, NULL, NULL, 'N;'),
('Employees.EmployeePositions.Index', 0, NULL, NULL, 'N;'),
('Employees.EmployeePositions.Update', 0, NULL, NULL, 'N;'),
('Employees.EmployeePositions.View', 0, NULL, NULL, 'N;'),
('Employees.Employees.*', 1, NULL, NULL, 'N;'),
('Employees.Employees.Addinfo', 0, NULL, NULL, 'N;'),
('Employees.Employees.Address', 0, NULL, NULL, 'N;'),
('Employees.Employees.Admin', 0, NULL, NULL, 'N;'),
('Employees.Employees.Contact', 0, NULL, NULL, 'N;'),
('Employees.Employees.Create', 0, NULL, NULL, 'N;'),
('Employees.Employees.Create2', 0, NULL, NULL, 'N;'),
('Employees.Employees.Delete', 0, NULL, NULL, 'N;'),
('Employees.Employees.DisplaySavedImage', 0, NULL, NULL, 'N;'),
('Employees.Employees.Index', 0, NULL, NULL, 'N;'),
('Employees.Employees.Manage', 0, NULL, NULL, 'N;'),
('Employees.Employees.Pdf', 0, NULL, NULL, 'N;'),
('Employees.Employees.Remove', 0, NULL, NULL, 'N;'),
('Employees.Employees.Update', 0, NULL, NULL, 'N;'),
('Employees.Employees.View', 0, NULL, NULL, 'N;'),
('Employees.EmployeesSubjects.*', 1, NULL, NULL, 'N;'),
('Employees.EmployeesSubjects.Admin', 0, NULL, NULL, 'N;'),
('Employees.EmployeesSubjects.Assign', 0, NULL, NULL, 'N;'),
('Employees.EmployeesSubjects.Create', 0, NULL, NULL, 'N;'),
('Employees.EmployeesSubjects.Current', 0, NULL, NULL, 'N;'),
('Employees.EmployeesSubjects.Delete', 0, NULL, NULL, 'N;'),
('Employees.EmployeesSubjects.Deleterow', 0, NULL, NULL, 'N;'),
('Employees.EmployeesSubjects.Employee', 0, NULL, NULL, 'N;'),
('Employees.EmployeesSubjects.Index', 0, NULL, NULL, 'N;'),
('Employees.EmployeesSubjects.Remove', 0, NULL, NULL, 'N;'),
('Employees.EmployeesSubjects.Subject', 0, NULL, NULL, 'N;'),
('Employees.EmployeesSubjects.Update', 0, NULL, NULL, 'N;'),
('Employees.EmployeesSubjects.View', 0, NULL, NULL, 'N;'),
('Employees.Savedsearches.*', 1, NULL, NULL, 'N;'),
('Employees.Savedsearches.Addnew', 0, NULL, NULL, 'N;'),
('Employees.Savedsearches.Admin', 0, NULL, NULL, 'N;'),
('Employees.Savedsearches.Create', 0, NULL, NULL, 'N;'),
('Employees.Savedsearches.Delete', 0, NULL, NULL, 'N;'),
('Employees.Savedsearches.Index', 0, NULL, NULL, 'N;'),
('Employees.Savedsearches.Update', 0, NULL, NULL, 'N;'),
('Employees.Savedsearches.View', 0, NULL, NULL, 'N;'),
('Events.*', 1, NULL, NULL, 'N;'),
('Events.Index', 0, NULL, NULL, 'N;'),
('Events.ReturnForm', 0, NULL, NULL, 'N;'),
('Events.ReturnView', 0, NULL, NULL, 'N;'),
('FeeCollectionParticulars.*', 1, NULL, NULL, 'N;'),
('FeeCollectionParticulars.Index', 0, NULL, NULL, 'N;'),
('FeeCollectionParticulars.ReturnForm', 0, NULL, NULL, 'N;'),
('FeeCollectionParticulars.ReturnView', 0, NULL, NULL, 'N;'),
('FinanceFeeCategories.*', 1, NULL, NULL, 'N;'),
('FinanceFeeCategories.Index', 0, NULL, NULL, 'N;'),
('FinanceFeeCategories.ReturnForm', 0, NULL, NULL, 'N;'),
('FinanceFeeCategories.ReturnView', 0, NULL, NULL, 'N;'),
('FinanceFeeCategoriesCont.*', 1, NULL, NULL, 'N;'),
('FinanceFeeCategoriesCont.Additionalfees', 0, NULL, NULL, 'N;'),
('FinanceFeeCategoriesCont.Additionalview', 0, NULL, NULL, 'N;'),
('FinanceFeeCategoriesCont.Admin', 0, NULL, NULL, 'N;'),
('FinanceFeeCategoriesCont.Create', 0, NULL, NULL, 'N;'),
('FinanceFeeCategoriesCont.Delete', 0, NULL, NULL, 'N;'),
('FinanceFeeCategoriesCont.Index', 0, NULL, NULL, 'N;'),
('FinanceFeeCategoriesCont.Master', 0, NULL, NULL, 'N;'),
('FinanceFeeCategoriesCont.Update', 0, NULL, NULL, 'N;'),
('FinanceFeeCategoriesCont.View', 0, NULL, NULL, 'N;'),
('FinanceFeeCollections.*', 1, NULL, NULL, 'N;'),
('FinanceFeeCollections.Index', 0, NULL, NULL, 'N;'),
('FinanceFeeCollections.ReturnForm', 0, NULL, NULL, 'N;'),
('FinanceFeeCollections.ReturnView', 0, NULL, NULL, 'N;'),
('FinanceFeeParticulars.*', 1, NULL, NULL, 'N;'),
('FinanceFeeParticulars.Index', 0, NULL, NULL, 'N;'),
('FinanceFeeParticulars.ReturnForm', 0, NULL, NULL, 'N;'),
('FinanceFeeParticulars.ReturnView', 0, NULL, NULL, 'N;'),
('FinanceFeeParticularsCont.*', 1, NULL, NULL, 'N;'),
('FinanceFeeParticularsCont.Admin', 0, NULL, NULL, 'N;'),
('FinanceFeeParticularsCont.Create', 0, NULL, NULL, 'N;'),
('FinanceFeeParticularsCont.Delete', 0, NULL, NULL, 'N;'),
('FinanceFeeParticularsCont.Index', 0, NULL, NULL, 'N;'),
('FinanceFeeParticularsCont.Manage', 0, NULL, NULL, 'N;'),
('FinanceFeeParticularsCont.Update', 0, NULL, NULL, 'N;'),
('FinanceFeeParticularsCont.View', 0, NULL, NULL, 'N;'),
('FinanceFees.*', 1, NULL, NULL, 'N;'),
('FinanceFees.Admin', 0, NULL, NULL, 'N;'),
('FinanceFees.Create', 0, NULL, NULL, 'N;'),
('FinanceFees.Delete', 0, NULL, NULL, 'N;'),
('FinanceFees.Index', 0, NULL, NULL, 'N;'),
('FinanceFees.Payfees', 0, NULL, NULL, 'N;'),
('FinanceFees.Update', 0, NULL, NULL, 'N;'),
('FinanceFees.View', 0, NULL, NULL, 'N;'),
('Guest', 2, NULL, NULL, 'N;'),
('Leads.*', 1, NULL, NULL, 'N;'),
('Leads.Add', 0, NULL, NULL, 'N;'),
('Leads.Admin', 0, NULL, NULL, 'N;'),
('Leads.Assesments', 0, NULL, NULL, 'N;'),
('Leads.Attentance', 0, NULL, NULL, 'N;'),
('Leads.Batch', 0, NULL, NULL, 'N;'),
('Leads.Create', 0, NULL, NULL, 'N;'),
('Leads.Delete', 0, NULL, NULL, 'N;'),
('Leads.Events', 0, NULL, NULL, 'N;'),
('Leads.Index', 0, NULL, NULL, 'N;'),
('Leads.Manage', 0, NULL, NULL, 'N;'),
('Leads.Savesearch', 0, NULL, NULL, 'N;'),
('Leads.Update', 0, NULL, NULL, 'N;'),
('Leads.View', 0, NULL, NULL, 'N;'),
('Leads.Website', 0, NULL, NULL, 'N;'),
('Mailbox.Default.*', 1, NULL, NULL, 'N;'),
('Mailbox.Default.Index', 0, NULL, NULL, 'N;'),
('Mailbox.Groups.*', 1, NULL, NULL, 'N;'),
('Mailbox.Groups.Admin', 0, NULL, NULL, 'N;'),
('Mailbox.Groups.Create', 0, NULL, NULL, 'N;'),
('Mailbox.Groups.Delete', 0, NULL, NULL, 'N;'),
('Mailbox.Groups.Index', 0, NULL, NULL, 'N;'),
('Mailbox.Groups.Message', 0, NULL, NULL, 'N;'),
('Mailbox.Groups.Messagedetails', 0, NULL, NULL, 'N;'),
('Mailbox.Groups.Update', 0, NULL, NULL, 'N;'),
('Mailbox.Groups.View', 0, NULL, NULL, 'N;'),
('Mailbox.Message.*', 1, NULL, NULL, 'N;'),
('Mailbox.Message.Admin', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Create', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Data', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Ddel', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Del', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Delete', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Fdel', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Folder', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Forward', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Index', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Message', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Reply', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Sdel', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Sentitems', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Sentmessage', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Star', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Stardel', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Starred', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Unstar', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Update', 0, NULL, NULL, 'N;'),
('Mailbox.Message.Ustar', 0, NULL, NULL, 'N;'),
('Mailbox.Message.View', 0, NULL, NULL, 'N;'),
('Mailbox.User.*', 1, NULL, NULL, 'N;'),
('Mailbox.User.Admin', 0, NULL, NULL, 'N;'),
('Mailbox.User.Create', 0, NULL, NULL, 'N;'),
('Mailbox.User.Data', 0, NULL, NULL, 'N;'),
('Mailbox.User.Delete', 0, NULL, NULL, 'N;'),
('Mailbox.User.Draft', 0, NULL, NULL, 'N;'),
('Mailbox.User.Events', 0, NULL, NULL, 'N;'),
('Mailbox.User.Folder', 0, NULL, NULL, 'N;'),
('Mailbox.User.Folders', 0, NULL, NULL, 'N;'),
('Mailbox.User.Forward', 0, NULL, NULL, 'N;'),
('Mailbox.User.Inbox', 0, NULL, NULL, 'N;'),
('Mailbox.User.Inboxbottom', 0, NULL, NULL, 'N;'),
('Mailbox.User.Inboxmessage', 0, NULL, NULL, 'N;'),
('Mailbox.User.Inboxtask', 0, NULL, NULL, 'N;'),
('Mailbox.User.Index', 0, NULL, NULL, 'N;'),
('Mailbox.User.Patientprofile', 0, NULL, NULL, 'N;'),
('Mailbox.User.Sentitems', 0, NULL, NULL, 'N;'),
('Mailbox.User.Star', 0, NULL, NULL, 'N;'),
('Mailbox.User.Taskdetails', 0, NULL, NULL, 'N;'),
('Mailbox.User.Update', 0, NULL, NULL, 'N;'),
('Mailbox.User.View', 0, NULL, NULL, 'N;'),
('Mailbox.Userfolder.*', 1, NULL, NULL, 'N;'),
('Mailbox.Userfolder.Admin', 0, NULL, NULL, 'N;'),
('Mailbox.Userfolder.Create', 0, NULL, NULL, 'N;'),
('Mailbox.Userfolder.Delete', 0, NULL, NULL, 'N;'),
('Mailbox.Userfolder.Index', 0, NULL, NULL, 'N;'),
('Mailbox.Userfolder.Update', 0, NULL, NULL, 'N;'),
('Mailbox.Userfolder.View', 0, NULL, NULL, 'N;'),
('Messages.Compose.*', 1, NULL, NULL, 'N;'),
('Messages.Compose.Compose', 0, NULL, NULL, 'N;'),
('Messages.Delete.*', 1, NULL, NULL, 'N;'),
('Messages.Delete.Delete', 0, NULL, NULL, 'N;'),
('Messages.Inbox.*', 1, NULL, NULL, 'N;'),
('Messages.Inbox.Inbox', 0, NULL, NULL, 'N;'),
('Messages.Index.*', 1, NULL, NULL, 'N;'),
('Messages.Index.Index', 0, NULL, NULL, 'N;'),
('Messages.Sent.*', 1, NULL, NULL, 'N;'),
('Messages.Sent.Sent', 0, NULL, NULL, 'N;'),
('Messages.Suggest.*', 1, NULL, NULL, 'N;'),
('Messages.Suggest.User', 0, NULL, NULL, 'N;'),
('Messages.View.*', 1, NULL, NULL, 'N;'),
('Messages.View.View', 0, NULL, NULL, 'N;'),
('parent', 2, 'For parent Portal', NULL, 'N;'),
('Reports.*', 1, NULL, NULL, 'N;'),
('Reports.Add', 0, NULL, NULL, 'N;'),
('Reports.Admin', 0, NULL, NULL, 'N;'),
('Reports.Assesments', 0, NULL, NULL, 'N;'),
('Reports.Attentance', 0, NULL, NULL, 'N;'),
('Reports.Batch', 0, NULL, NULL, 'N;'),
('Reports.Create', 0, NULL, NULL, 'N;'),
('Reports.Delete', 0, NULL, NULL, 'N;'),
('Reports.Events', 0, NULL, NULL, 'N;'),
('Reports.Index', 0, NULL, NULL, 'N;'),
('Reports.Manage', 0, NULL, NULL, 'N;'),
('Reports.Savesearch', 0, NULL, NULL, 'N;'),
('Reports.Update', 0, NULL, NULL, 'N;'),
('Reports.View', 0, NULL, NULL, 'N;'),
('Reports.Website', 0, NULL, NULL, 'N;'),
('Rights1.Assignment.*', 1, NULL, NULL, 'N;'),
('Rights1.Assignment.Revoke', 0, NULL, NULL, 'N;'),
('Rights1.Assignment.User', 0, NULL, NULL, 'N;'),
('Rights1.Assignment.View', 0, NULL, NULL, 'N;'),
('Rights1.AuthItem.*', 1, NULL, NULL, 'N;'),
('Rights1.AuthItem.Assign', 0, NULL, NULL, 'N;'),
('Rights1.AuthItem.Create', 0, NULL, NULL, 'N;'),
('Rights1.AuthItem.Delete', 0, NULL, NULL, 'N;'),
('Rights1.AuthItem.Generate', 0, NULL, NULL, 'N;'),
('Rights1.AuthItem.Operations', 0, NULL, NULL, 'N;'),
('Rights1.AuthItem.Permissions', 0, NULL, NULL, 'N;'),
('Rights1.AuthItem.RemoveChild', 0, NULL, NULL, 'N;'),
('Rights1.AuthItem.Revoke', 0, NULL, NULL, 'N;'),
('Rights1.AuthItem.Roles', 0, NULL, NULL, 'N;'),
('Rights1.AuthItem.Sortable', 0, NULL, NULL, 'N;'),
('Rights1.AuthItem.Tasks', 0, NULL, NULL, 'N;'),
('Rights1.AuthItem.Update', 0, NULL, NULL, 'N;'),
('Rights1.Install.*', 1, NULL, NULL, 'N;'),
('Rights1.Install.Confirm', 0, NULL, NULL, 'N;'),
('Rights1.Install.Error', 0, NULL, NULL, 'N;'),
('Rights1.Install.Ready', 0, NULL, NULL, 'N;'),
('Rights1.Install.Run', 0, NULL, NULL, 'N;'),
('Rights12.Assignment.*', 1, NULL, NULL, 'N;'),
('Rights12.Assignment.Revoke', 0, NULL, NULL, 'N;'),
('Rights12.Assignment.User', 0, NULL, NULL, 'N;'),
('Rights12.Assignment.View', 0, NULL, NULL, 'N;'),
('Rights12.AuthItem.*', 1, NULL, NULL, 'N;'),
('Rights12.AuthItem.Assign', 0, NULL, NULL, 'N;'),
('Rights12.AuthItem.Create', 0, NULL, NULL, 'N;'),
('Rights12.AuthItem.Delete', 0, NULL, NULL, 'N;'),
('Rights12.AuthItem.Generate', 0, NULL, NULL, 'N;'),
('Rights12.AuthItem.Operations', 0, NULL, NULL, 'N;'),
('Rights12.AuthItem.Permissions', 0, NULL, NULL, 'N;'),
('Rights12.AuthItem.RemoveChild', 0, NULL, NULL, 'N;'),
('Rights12.AuthItem.Revoke', 0, NULL, NULL, 'N;'),
('Rights12.AuthItem.Roles', 0, NULL, NULL, 'N;'),
('Rights12.AuthItem.Sortable', 0, NULL, NULL, 'N;'),
('Rights12.AuthItem.Tasks', 0, NULL, NULL, 'N;'),
('Rights12.AuthItem.Update', 0, NULL, NULL, 'N;'),
('Rights12.Install.*', 1, NULL, NULL, 'N;'),
('Rights12.Install.Confirm', 0, NULL, NULL, 'N;'),
('Rights12.Install.Ready', 0, NULL, NULL, 'N;'),
('Rights12.Install.Run', 0, NULL, NULL, 'N;'),
('Savedsearches.*', 1, NULL, NULL, 'N;'),
('Savedsearches.Addnew', 0, NULL, NULL, 'N;'),
('Savedsearches.Admin', 0, NULL, NULL, 'N;'),
('Savedsearches.Create', 0, NULL, NULL, 'N;'),
('Savedsearches.Delete', 0, NULL, NULL, 'N;'),
('Savedsearches.Index', 0, NULL, NULL, 'N;'),
('Savedsearches.Update', 0, NULL, NULL, 'N;'),
('Savedsearches.View', 0, NULL, NULL, 'N;'),
('Site.*', 1, NULL, NULL, 'N;'),
('Site.Contact', 0, NULL, NULL, 'N;'),
('Site.Error', 0, NULL, NULL, 'N;'),
('Site.Index', 0, NULL, NULL, 'N;'),
('Site.Login', 0, NULL, NULL, 'N;'),
('Site.Logout', 0, NULL, NULL, 'N;'),
('Site.Search', 0, NULL, NULL, 'N;'),
('Students.Default.*', 1, NULL, NULL, 'N;'),
('Students.Default.Index', 0, NULL, NULL, 'N;'),
('Students.Guardians.*', 1, NULL, NULL, 'N;'),
('Students.Guardians.Addguardian', 0, NULL, NULL, 'N;'),
('Students.Guardians.Admin', 0, NULL, NULL, 'N;'),
('Students.Guardians.Create', 0, NULL, NULL, 'N;'),
('Students.Guardians.Delete', 0, NULL, NULL, 'N;'),
('Students.Guardians.Index', 0, NULL, NULL, 'N;'),
('Students.Guardians.Update', 0, NULL, NULL, 'N;'),
('Students.Guardians.View', 0, NULL, NULL, 'N;'),
('Students.Savedsearches.*', 1, NULL, NULL, 'N;'),
('Students.Savedsearches.Addnew', 0, NULL, NULL, 'N;'),
('Students.Savedsearches.Admin', 0, NULL, NULL, 'N;'),
('Students.Savedsearches.Create', 0, NULL, NULL, 'N;'),
('Students.Savedsearches.Delete', 0, NULL, NULL, 'N;'),
('Students.Savedsearches.Index', 0, NULL, NULL, 'N;'),
('Students.Savedsearches.Update', 0, NULL, NULL, 'N;'),
('Students.Savedsearches.View', 0, NULL, NULL, 'N;'),
('Students.StudentAdditionalFields.*', 1, NULL, NULL, 'N;'),
('Students.StudentAdditionalFields.Admin', 0, NULL, NULL, 'N;'),
('Students.StudentAdditionalFields.Create', 0, NULL, NULL, 'N;'),
('Students.StudentAdditionalFields.Delete', 0, NULL, NULL, 'N;'),
('Students.StudentAdditionalFields.Index', 0, NULL, NULL, 'N;'),
('Students.StudentAdditionalFields.Update', 0, NULL, NULL, 'N;'),
('Students.StudentAdditionalFields.View', 0, NULL, NULL, 'N;'),
('Students.StudentCategories.*', 1, NULL, NULL, 'N;'),
('Students.StudentCategories.Admin', 0, NULL, NULL, 'N;'),
('Students.StudentCategories.Create', 0, NULL, NULL, 'N;'),
('Students.StudentCategories.Delete', 0, NULL, NULL, 'N;'),
('Students.StudentCategories.Index', 0, NULL, NULL, 'N;'),
('Students.StudentCategories.Update', 0, NULL, NULL, 'N;'),
('Students.StudentCategories.View', 0, NULL, NULL, 'N;'),
('Students.StudentCategory.*', 1, NULL, NULL, 'N;'),
('Students.StudentCategory.Index', 0, NULL, NULL, 'N;'),
('Students.StudentCategory.ReturnForm', 0, NULL, NULL, 'N;'),
('Students.StudentCategory.ReturnView', 0, NULL, NULL, 'N;'),
('Students.StudentLeave.*', 1, NULL, NULL, 'N;'),
('Students.StudentLeave.Index', 0, NULL, NULL, 'N;'),
('Students.StudentLeave.ReturnForm', 0, NULL, NULL, 'N;'),
('Students.StudentLeave.ReturnView', 0, NULL, NULL, 'N;'),
('Students.StudentPreviousDatas.*', 1, NULL, NULL, 'N;'),
('Students.StudentPreviousDatas.Admin', 0, NULL, NULL, 'N;'),
('Students.StudentPreviousDatas.Create', 0, NULL, NULL, 'N;'),
('Students.StudentPreviousDatas.Delete', 0, NULL, NULL, 'N;'),
('Students.StudentPreviousDatas.Index', 0, NULL, NULL, 'N;'),
('Students.StudentPreviousDatas.Update', 0, NULL, NULL, 'N;'),
('Students.StudentPreviousDatas.View', 0, NULL, NULL, 'N;'),
('Students.Students.*', 1, NULL, NULL, 'N;'),
('Students.Students.Active', 0, NULL, NULL, 'N;'),
('Students.Students.Add', 0, NULL, NULL, 'N;'),
('Students.Students.Admin', 0, NULL, NULL, 'N;'),
('Students.Students.Assesments', 0, NULL, NULL, 'N;'),
('Students.Students.Attentance', 0, NULL, NULL, 'N;'),
('Students.Students.Batch', 0, NULL, NULL, 'N;'),
('Students.Students.Create', 0, NULL, NULL, 'N;'),
('Students.Students.Delete', 0, NULL, NULL, 'N;'),
('Students.Students.DisplaySavedImage', 0, NULL, NULL, 'N;'),
('Students.Students.Events', 0, NULL, NULL, 'N;'),
('Students.Students.Fees', 0, NULL, NULL, 'N;'),
('Students.Students.Inactive', 0, NULL, NULL, 'N;'),
('Students.Students.Index', 0, NULL, NULL, 'N;'),
('Students.Students.Manage', 0, NULL, NULL, 'N;'),
('Students.Students.Payfees', 0, NULL, NULL, 'N;'),
('Students.Students.Pdf', 0, NULL, NULL, 'N;'),
('Students.Students.Printpdf', 0, NULL, NULL, 'N;'),
('Students.Students.Remove', 0, NULL, NULL, 'N;'),
('Students.Students.Savesearch', 0, NULL, NULL, 'N;'),
('Students.Students.Search', 0, NULL, NULL, 'N;'),
('Students.Students.Update', 0, NULL, NULL, 'N;'),
('Students.Students.View', 0, NULL, NULL, 'N;'),
('Students.Students.Website', 0, NULL, NULL, 'N;'),
('Translate.Edit.*', 1, NULL, NULL, 'N;'),
('Translate.Edit.Admin', 0, NULL, NULL, 'N;'),
('Translate.Edit.Create', 0, NULL, NULL, 'N;'),
('Translate.Edit.Delete', 0, NULL, NULL, 'N;'),
('Translate.Edit.Missing', 0, NULL, NULL, 'N;'),
('Translate.Edit.Missingdelete', 0, NULL, NULL, 'N;'),
('Translate.Edit.Update', 0, NULL, NULL, 'N;'),
('Translate.Translate.*', 1, NULL, NULL, 'N;'),
('Translate.Translate.Index', 0, NULL, NULL, 'N;'),
('User.*', 1, NULL, NULL, 'N;'),
('User.Admin', 0, NULL, NULL, 'N;'),
('User.Create', 0, NULL, NULL, 'N;'),
('User.Delete', 0, NULL, NULL, 'N;'),
('User.Index', 0, NULL, NULL, 'N;'),
('User.Update', 0, NULL, NULL, 'N;'),
('User.View', 0, NULL, NULL, 'N;');

--
-- Dumping data for table `authitemchild`
--


--
-- Dumping data for table `bank_fields`
--


--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `name`, `course_id`, `start_date`, `end_date`, `is_active`, `is_deleted`, `employee_id`) VALUES
(1, '1A', 1, '2012-06-01 00:00:00', '2013-03-29 00:00:00', 1, 0, '1'),
(2, '1B', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, '1'),
(3, '2A', 2, '2012-06-01 00:00:00', '2013-03-29 00:00:00', 1, 0, '1'),
(4, '1C', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, '1'),
(5, '2B', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, '1'),
(6, '2C', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, '1'),
(7, '3A', 3, '2012-06-08 00:00:00', '2013-03-29 00:00:00', 1, 0, '1'),
(8, '4A', 4, '2012-06-01 00:00:00', '2013-03-29 00:00:00', 1, 0, '1'),
(9, '5A', 5, '2012-06-01 00:00:00', '2013-03-29 00:00:00', 1, 0, '1'),
(10, '3B', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, '1'),
(11, '3C', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, '1'),
(12, '4B', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, '1'),
(13, '4C', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, '1'),
(14, '5B', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, '1'),
(15, '5C', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, '1'),
(16, '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, '1');

--
-- Dumping data for table `batch_events`
--


--
-- Dumping data for table `batch_students`
--


--
-- Dumping data for table `blog_user`
--

INSERT INTO `blog_user` (`id`, `username`, `password`, `salt`, `email`, `profile`) VALUES
(1, 'admin', '9401b8c7297832c567ae922cc596a4dd', '28b206548469ce62182048fd9cf91760', 'webmaster@example.com', NULL),
(2, 'demo', '2e5c7db760a33498023813489cfadc0b', '28b206548469ce62182048fd9cf91760', 'webmaster@example.com', NULL),
(3, 'ram', '286c96dbf46a3b877a9528741b963cff', '4fd8466347df02.04625631', '', NULL),
(4, 'rajith', 'cf852905b22b19bd216c95c43d23e176', '4fdeff089fab28.09813984', '', NULL),
(5, 'matt', '30a7c56fbc249e46e9f6a4cb8674f426', '4fdf18e12548e0.06506305', '', NULL);

--
-- Dumping data for table `class_timings`
--

INSERT INTO `class_timings` (`id`, `batch_id`, `name`, `start_time`, `end_time`, `is_break`) VALUES
(1, 1, 'morning', '08:30 AM', '09:30 AM', 0),
(2, 1, 'morning', '09:30 AM', '10:30 AM', 0),
(3, 1, 'morning', '10:45 AM', '11:45 AM', 0),
(4, 1, 'morning', '11:45 AM', '12:30 PM', 0),
(5, 1, 'noon', '01:30 PM', '02:30 PM', 0),
(6, 1, 'noon', '02:30 PM', '03:30 PM', 0),
(7, 1, 'noon', '03:30 PM', '04:30 PM', 0),
(8, 2, 'morning', '08:30 AM', '09:30 AM', 0),
(9, 2, 'morning', '09:30 AM', '10:30 AM', 0),
(10, 2, 'morning', '09:30 AM', '10:30 AM', 0),
(11, 2, 'morning', '10:45 AM', '11:45 AM', 0),
(12, 2, 'morning', '11:45 AM', '12:45 PM', 0);

--
-- Dumping data for table `cms_attachment`
--


--
-- Dumping data for table `cms_content`
--


--
-- Dumping data for table `cms_node`
--


--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `config_key`, `config_value`) VALUES
(1, 'InstitutionName', 'Matthew'),
(2, 'InstitutionAddress', ''),
(3, 'InstitutionPhoneNo', ''),
(4, 'StudentAttendanceType', 'Daily'),
(5, 'CurrencyType', ''),
(6, 'Locale', ''),
(7, 'AdmissionNumberAutoIncrement', '1'),
(8, 'EmployeeNumberAutoIncrement', '1'),
(9, 'TotalSmsCount', NULL),
(10, 'AvailableModules', NULL),
(11, 'AvailableModules', NULL),
(12, 'NetworkState', 'Online'),
(13, 'FinancialYearStartDate', ''),
(14, 'FinancialYearEndDate', NULL),
(15, 'AutomaticLeaveReset', NULL),
(16, 'LeaveResetPeriod', NULL),
(17, 'LastAutoLeaveReset', NULL),
(18, 'logo', NULL);

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'Andorra'),
(5, 'Angola'),
(6, 'Antigua & Deps'),
(7, 'Argentina'),
(8, 'Armenia'),
(9, 'Australia'),
(10, 'Austria'),
(11, 'Azerbaijan'),
(12, 'Bahamas'),
(13, 'Bahrain'),
(14, 'Bangladesh'),
(15, 'Barbados'),
(16, 'Belarus'),
(17, 'Belgium'),
(18, 'Belize'),
(19, 'Benin'),
(20, 'Bhutan'),
(21, 'Bolivia'),
(22, 'Bosnia Herzegovina'),
(23, 'Botswana'),
(24, 'Brazil'),
(25, 'Brunei'),
(26, 'Bulgaria'),
(27, 'Burkina'),
(28, 'Burundi'),
(29, 'Cambodia'),
(30, 'Cameroon'),
(31, 'Canada'),
(32, 'Cape Verde'),
(33, 'Central African Rep'),
(34, 'Chad'),
(35, 'Chile'),
(36, 'China'),
(37, 'Colombia'),
(38, 'Comoros'),
(39, 'Congo'),
(40, 'Congo {Democratic Rep}'),
(41, 'Costa Rica'),
(42, 'Croatia'),
(43, 'Cuba'),
(44, 'Cyprus'),
(45, 'Czech Republic'),
(46, 'Denmark'),
(47, 'Djibouti'),
(48, 'Dominica'),
(49, 'Dominican Republic'),
(50, 'East Timor'),
(51, 'Ecuador'),
(52, 'Egypt'),
(53, 'El Salvador'),
(54, 'Equatorial Guinea'),
(55, 'Eritrea'),
(56, 'Estonia'),
(57, 'Ethiopia'),
(58, 'Fiji'),
(59, 'Finland'),
(60, 'France'),
(61, 'Gabon'),
(62, 'Gambia'),
(63, 'Georgia'),
(64, 'Germany'),
(65, 'Ghana'),
(66, 'Greece'),
(67, 'Grenada'),
(68, 'Guatemala'),
(69, 'Guinea'),
(70, 'Guinea-Bissau'),
(71, 'Guyana'),
(72, 'Haiti'),
(73, 'Honduras'),
(74, 'Hungary'),
(75, 'Iceland'),
(76, 'India'),
(77, 'Indonesia'),
(78, 'Iran'),
(79, 'Iraq'),
(80, 'Ireland {Republic}'),
(81, 'Israel'),
(82, 'Italy'),
(83, 'Ivory Coast'),
(84, 'Jamaica'),
(85, 'Japan'),
(86, 'Jordan'),
(87, 'Kazakhstan'),
(88, 'Kenya'),
(89, 'Kiribati'),
(90, 'Korea North'),
(91, 'Korea South'),
(92, 'Kosovo'),
(93, 'Kuwait'),
(94, 'Kyrgyzstan'),
(95, 'Laos'),
(96, 'Latvia'),
(97, 'Lebanon'),
(98, 'Lesotho'),
(99, 'Liberia'),
(100, 'Libya'),
(101, 'Liechtenstein'),
(102, 'Lithuania'),
(103, 'Luxembourg'),
(104, 'Macedonia'),
(105, 'Madagascar'),
(106, 'Malawi'),
(107, 'Malaysia'),
(108, 'Maldives'),
(109, 'Mali'),
(110, 'Malta'),
(111, 'Montenegro'),
(112, 'Marshall Islands'),
(113, 'Mauritania'),
(114, 'Mauritius'),
(115, 'Mexico'),
(116, 'Micronesia'),
(117, 'Moldova'),
(118, 'Monaco'),
(119, 'Mongolia'),
(120, 'Morocco'),
(121, 'Mozambique'),
(122, 'Myanmar, {Burma}'),
(123, 'Namibia'),
(124, 'Nauru'),
(125, 'Nepal'),
(126, 'Netherlands'),
(127, 'New Zealand'),
(128, 'Nicaragua'),
(129, 'Niger'),
(130, 'Nigeria'),
(131, 'Norway'),
(132, 'Oman'),
(133, 'Pakistan'),
(134, 'Palau'),
(135, 'Panama'),
(136, 'Papua New Guinea'),
(137, 'Paraguay'),
(138, 'Peru'),
(139, 'Philippines'),
(140, 'Poland'),
(141, 'Portugal'),
(142, 'Qatar'),
(143, 'Romania'),
(144, 'Russian Federation'),
(145, 'Rwanda'),
(146, 'St Kitts & Nevis'),
(147, 'St Lucia'),
(148, 'Saint Vincent & the Grenadines'),
(149, 'Samoa'),
(150, 'San Marino'),
(151, 'Sao Tome & Principe'),
(152, 'Saudi Arabia'),
(153, 'Senegal'),
(154, 'Serbia'),
(155, 'Seychelles'),
(156, 'Sierra Leone'),
(157, 'Singapore'),
(158, 'Slovakia'),
(159, 'Slovenia'),
(160, 'Solomon Islands'),
(161, 'Somalia'),
(162, 'South Africa'),
(163, 'Spain'),
(164, 'Sri Lanka'),
(165, 'Sudan'),
(166, 'Suriname'),
(167, 'Swaziland'),
(168, 'Sweden'),
(169, 'Switzerland'),
(170, 'Syria'),
(171, 'Taiwan'),
(172, 'Tajikistan'),
(173, 'Tanzania'),
(174, 'Thailand'),
(175, 'Togo'),
(176, 'Tonga'),
(177, 'Trinidad & Tobago'),
(178, 'Tunisia'),
(179, 'Turkey'),
(180, 'Turkmenistan'),
(181, 'Tuvalu'),
(182, 'Uganda'),
(183, 'Ukraine'),
(184, 'United Arab Emirates'),
(185, 'United Kingdom'),
(186, 'United States'),
(187, 'Uruguay'),
(188, 'Uzbekistan'),
(189, 'Vanuatu'),
(190, 'Vatican City'),
(191, 'Venezuea'),
(192, 'Vietnam'),
(193, 'Yemen'),
(194, 'Zambia'),
(195, 'Zimbabwe');

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `code`, `section_name`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '1', '01', 'full', 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00'),
(2, '2', '02', 'A', 0, '2012-06-08 00:00:00', '0000-00-00 00:00:00'),
(3, '3', '03', 'A', 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00'),
(4, '4', '04', 'A', 0, '2012-06-08 00:00:00', '0000-00-00 00:00:00'),
(5, '5', '05', 'A', 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00');

--
-- Dumping data for table `draft`
--


--
-- Dumping data for table `electives`
--


--
-- Dumping data for table `elective_groups`
--


--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_category_id`, `employee_number`, `joining_date`, `first_name`, `middle_name`, `last_name`, `gender`, `job_title`, `employee_position_id`, `employee_department_id`, `reporting_manager_id`, `employee_grade_id`, `qualification`, `experience_detail`, `experience_year`, `experience_month`, `status`, `status_description`, `date_of_birth`, `marital_status`, `children_count`, `father_name`, `mother_name`, `husband_name`, `blood_group`, `nationality_id`, `home_address_line1`, `home_address_line2`, `home_city`, `home_state`, `home_country_id`, `home_pin_code`, `office_address_line1`, `office_address_line2`, `office_city`, `office_state`, `office_country_id`, `office_pin_code`, `office_phone1`, `office_phone2`, `mobile_phone`, `home_phone`, `email`, `fax`, `photo_file_name`, `photo_content_type`, `photo_data`, `created_at`, `updated_at`, `photo_file_size`, `user_id`, `is_deleted`) VALUES
(1, 2, 'E1', '2011-06-01', 'jayaraj', '', 'shanker', 'M', 'teacher', 1, 1, NULL, 1, 'bsc b.ed', 'two years', 0, 2, 1, NULL, '1959-08-12', 'Married', 2, 'shankaranarayanan', 'maalathi', '', 'A+', 76, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 0),
(2, 2, 'E2', '2011-06-03', 'nirmala', '', 'ramesh', 'F', 'teacher', 1, 1, NULL, 1, 'bsc b.ed', 'one year', 0, 1, 1, NULL, '1972-06-14', 'Married', 2, 'mohan', 'meenakshi', 'ramesh', 'B-', 76, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 0),
(3, 2, 'E3', '2005-06-17', 'ram', '', 'krishnan', 'M', 'teacher', 3, 1, NULL, 1, 'bsc b.ed', '8years', 0, 8, 1, NULL, '1953-06-24', 'Married', 3, 'govind', 'saraswathi', '', 'B+', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 0),
(4, 2, 'E4', '1970-01-01', 'meenakshi', '', 'james', 'F', '', 4, 2, NULL, 1, 'msc .bed', '3years', 0, 3, 1, NULL, '1951-11-24', 'Married', 2, 'jayaraj', 'latha', 'james', 'B+', 76, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 0),
(5, 2, 'E5', '2010-08-19', 'annie ', '', 'thomas', 'F', '', 4, 3, NULL, 1, 'msc ', '3years', 0, 3, 1, NULL, '1960-11-30', 'Married', 1, 'mathew', 'neena', 'thomas mathew', 'B+', 76, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 0),
(6, 2, 'E6', '2011-06-21', 'hameed ', '', 'muhammed', 'M', '', 1, 4, NULL, 1, 'msc', '7years', 0, 7, 1, NULL, '1957-02-12', 'Married', NULL, 'rahman', 'julie', '', 'O+', 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 0),
(7, 2, 'E7', '1970-01-01', 'ronald', '', 'steve', 'M', '', 4, 5, NULL, 1, 'ma', '5years', 0, 5, 1, NULL, '1949-10-26', 'Single', NULL, 'christopher', 'roseena', '', 'A+', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 0);

--
-- Dumping data for table `employees_subjects`
--

INSERT INTO `employees_subjects` (`id`, `employee_id`, `subject_id`) VALUES
(1, 1, 11),
(2, 3, 11),
(3, 4, 13),
(4, 5, 14),
(5, 6, 14),
(6, 6, 13),
(7, 2, 13),
(8, 5, 12),
(9, 1, 12),
(11, 4, 1),
(12, 2, 1),
(13, 5, 2),
(14, 6, 2),
(15, 5, 3),
(16, 4, 5),
(17, 4, 6),
(18, 1, 27),
(19, 3, 27),
(20, 4, 27),
(21, 4, 8),
(22, 6, 8),
(23, 4, 9),
(24, 1, 9),
(25, 1, 26),
(26, 5, 29);

--
-- Dumping data for table `employee_additional_details`
--


--
-- Dumping data for table `employee_attendances`
--

INSERT INTO `employee_attendances` (`id`, `attendance_date`, `employee_id`, `employee_leave_type_id`, `reason`, `is_half_day`) VALUES
(1, '2012-06-13', 4, 4, 'fever', 0),
(2, '2012-06-01', 1, NULL, '', 0);

--
-- Dumping data for table `employee_bank_details`
--


--
-- Dumping data for table `employee_categories`
--

INSERT INTO `employee_categories` (`id`, `name`, `prefix`, `status`) VALUES
(1, 'headmaster', 'principal', 1),
(2, 'teacher', 'teacher', 1),
(3, 'clerk', 'clerk', 1),
(4, 'office assistant', 'assistant', 1),
(5, 'librarian', 'librarian', 1);

--
-- Dumping data for table `employee_departments`
--

INSERT INTO `employee_departments` (`id`, `code`, `name`, `status`) VALUES
(1, '001', 'physics', 1),
(2, '002', 'chemistry', 1),
(3, '003', 'biology', 1),
(4, '004', 'computer', 1),
(5, '005', 'physical education', 1);

--
-- Dumping data for table `employee_department_events`
--


--
-- Dumping data for table `employee_grades`
--

INSERT INTO `employee_grades` (`id`, `name`, `priority`, `status`, `max_hours_day`, `max_hours_week`) VALUES
(1, 'OS Admin', 0, 1, NULL, NULL);

--
-- Dumping data for table `employee_leaves`
--


--
-- Dumping data for table `employee_leave_types`
--

INSERT INTO `employee_leave_types` (`id`, `name`, `code`, `status`, `max_leave_count`, `carry_forward`) VALUES
(4, 'sick leave', '01', 1, '5', 0),
(5, 'medical leave', '02', 1, '5', 0);

--
-- Dumping data for table `employee_positions`
--

INSERT INTO `employee_positions` (`id`, `name`, `employee_category_id`, `status`) VALUES
(1, 'administrator', 1, 1),
(2, 'manager', 2, 1),
(3, 'office assistant', 3, 1),
(4, 'teacher', 5, 1);

--
-- Dumping data for table `employee_salary_structures`
--


--
-- Dumping data for table `events`
--


--
-- Dumping data for table `events_helper`
--

INSERT INTO `events_helper` (`id`, `type`, `user_id`, `title`) VALUES
(6, 0, 1, 'Testing Image'),
(7, 0, 1, 'Thats Cool'),
(8, 0, 1, 'Presentation Day'),
(9, 0, 1, 'Seminars'),
(10, 0, 1, 'ee');

--
-- Dumping data for table `events_old`
--


--
-- Dumping data for table `events_user_preference`
--

INSERT INTO `events_user_preference` (`user_id`, `mobile`, `mobile_alert`, `email`, `email_alert`) VALUES
(1, NULL, 0, NULL, 0),
(4, NULL, 0, NULL, 0);

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `exam_group_id`, `subject_id`, `start_time`, `end_time`, `maximum_marks`, `minimum_marks`, `grading_level_id`, `weightage`, `event_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2012-08-01 09:30:00', '2012-08-01 12:30:00', '100.00', '35.00', NULL, 0, NULL, '2012-06-08 00:00:00', '2012-06-08 00:00:00'),
(2, 1, 2, '2012-08-01 09:30:00', '2012-08-01 12:30:00', '100.00', '35.00', NULL, 0, NULL, '2012-06-08 00:00:00', '2012-06-08 00:00:00'),
(3, 1, 3, '2012-08-01 09:30:00', '2012-08-01 12:30:00', '100.00', '35.00', NULL, 0, NULL, '2012-06-08 00:00:00', '2012-06-08 00:00:00'),
(4, 1, 4, '2012-08-01 09:30:00', '2012-08-01 12:30:00', '100.00', '35.00', NULL, 0, NULL, '2012-06-08 00:00:00', '2012-06-08 00:00:00'),
(5, 1, 5, '2012-08-01 09:30:00', '2012-08-01 12:30:00', '100.00', '35.00', NULL, 0, NULL, '2012-06-08 00:00:00', '2012-06-08 00:00:00');

--
-- Dumping data for table `exam_groups`
--

INSERT INTO `exam_groups` (`id`, `name`, `batch_id`, `exam_type`, `is_published`, `result_published`, `exam_date`) VALUES
(1, 'internal', 1, 'Marks', 0, 0, '0000-00-00');

--
-- Dumping data for table `exam_scores`
--

INSERT INTO `exam_scores` (`id`, `student_id`, `exam_id`, `marks`, `grading_level_id`, `remarks`, `is_failed`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '95.00', NULL, 'good', NULL, '2012-06-08 00:00:00', '2012-06-08 00:00:00'),
(2, 12, 1, '87.00', NULL, 'good', NULL, '2012-06-08 00:00:00', '2012-06-08 00:00:00'),
(3, 13, 1, '99.00', NULL, 'good', NULL, '2012-06-08 00:00:00', '2012-06-08 00:00:00');

--
-- Dumping data for table `fee_collection_discounts`
--


--
-- Dumping data for table `fee_collection_particulars`
--


--
-- Dumping data for table `fee_discounts`
--


--
-- Dumping data for table `finance_donations`
--


--
-- Dumping data for table `finance_fees`
--


--
-- Dumping data for table `finance_fee_categories`
--


--
-- Dumping data for table `finance_fee_collections`
--


--
-- Dumping data for table `finance_fee_particulars`
--


--
-- Dumping data for table `finance_fee_structure_elements`
--


--
-- Dumping data for table `finance_transactions`
--


--
-- Dumping data for table `finance_transaction_categories`
--

INSERT INTO `finance_transaction_categories` (`id`, `name`, `description`, `is_income`, `deleted`) VALUES
(1, 'Salary', ' ', 0, 0),
(2, 'Donation', ' ', 1, 0),
(3, 'Fee', ' ', 1, 0);

--
-- Dumping data for table `finance_transaction_triggers`
--


--
-- Dumping data for table `folder`
--


--
-- Dumping data for table `grading_levels`
--

INSERT INTO `grading_levels` (`id`, `name`, `batch_id`, `min_score`, `order`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'A', NULL, 90, NULL, 0, '2012-02-20 13:41:10', '2012-02-20 13:41:10'),
(2, 'B', NULL, 80, NULL, 0, '2012-02-20 13:41:10', '2012-02-20 13:41:10'),
(3, 'C', NULL, 70, NULL, 0, '2012-02-20 13:41:11', '2012-02-20 13:41:11'),
(4, 'D', NULL, 60, NULL, 0, '2012-02-20 13:41:11', '2012-02-20 13:41:11'),
(5, 'E', NULL, 50, NULL, 0, '2012-02-20 13:41:11', '2012-02-20 13:41:11'),
(6, 'F', NULL, 40, NULL, 0, '2012-02-20 13:41:11', '2012-02-20 13:41:11');

--
-- Dumping data for table `grouped_exams`
--

INSERT INTO `grouped_exams` (`id`, `exam_group_id`, `batch_id`) VALUES
(1, 1, 1);

--
-- Dumping data for table `groups`
--


--
-- Dumping data for table `guardians`
--

INSERT INTO `guardians` (`id`, `ward_id`, `first_name`, `last_name`, `relation`, `email`, `office_phone1`, `office_phone2`, `mobile_phone`, `office_address_line1`, `office_address_line2`, `city`, `state`, `country_id`, `dob`, `occupation`, `income`, `education`, `created_at`, `updated_at`) VALUES
(2, 1, 'ramakrishnan', 'kartha', 'father', 'rk@yahoo.co.in', '0484234252', '0484872563', '', 'indian bank', 'apsara tower', 'cochin', 'kerala', 76, NULL, 'accountant', '1000000', 'bsc', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 2, 'mohan', 'kumar', 'uncle', 'mk@gmail.com', '0487653481', '', '9876345671', 'ax pvt ltd', 'town street', 'trivandrum', 'kerala', 76, NULL, 'clerk', '200000', '10', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 3, 'george', 'joseph', 'father', 'gj@hotmail.com', '04665666871', '0466542561', '9870985678', 'sun networks', 'opposite museum', 'chennai', 'tamil nadu', 76, NULL, 'accountant', '100000', 'b.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 4, 'muhammed', 'ishaac', 'father', 'mk@gmail.com', '786655', '876542', '098987678', 'thasnim supermarket', '', 'pondichery', 'tamilnadu', 76, NULL, 'manager', '2000000', 'bca', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 5, 'hameed', 'rahman', 'father', 'hr@yahoo.co.in', '87432874', '764832', '878436465', 'bharath electricals', 'chinmaya tower', 'cochin', 'kerala', 76, NULL, 'clerk', '64534', '10th', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 6, 'sameer', 'gupta', 'father', '', '85745453', '8545355', '546475875', '123/a', '', 'banglore', 'karnataka', 76, NULL, 'teacher', '22345535', 'degree', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 7, 'rishi', 'sharma', 'brother', '', '75664534', '8574554', '6787563', 'colors garden', '', 'manglore', 'karnataka', 76, NULL, 'business', '1221324', 'degree', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 8, 'lakshman', 'shukla', 'father', '', '7656534', '6754645', '97656455', '123/a', 'apsara tower', 'chennai', 'tamil nadu', 76, NULL, 'manager', '12323334', 'mba', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 9, 'dharmesh', 'singh', 'father', 'gj@hotmail.com', '0484234252', '0466542561', '098987678', 'bharath electricals', 'chinmaya tower', 'banglore', 'karnataka', 76, NULL, 'manager', '12323334', 'degree', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 10, 'mathew', 'tharakan', 'father', 'gj@hotmail.com', '0484234252', '', '546475875', 'bharath electricals', 'apsara tower', '', '', 1, NULL, 'clerk', '12323334', '10th', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 11, 'george', 'joseph', 'father', 'mk@gmail.com', '04665666871', '', '546475875', 'colors garden', 'chinmaya tower', 'manglore', 'karnataka', 76, NULL, 'manager', '1000000', 'bca', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 12, 'phelix', 'jacob', 'father', 'mk@gmail.com', '0487653481', '0484872563', '098987678', 'bharath electricals', 'chinmaya tower', 'delhi', 'haryana', 76, NULL, 'teacher', '1000000', '10th', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 13, 'shahina', 'hameed', 'sister', '', '', '0484872563', '6787563', '123/a', 'apsara tower', '', '', 76, NULL, 'accountant', '', 'degree', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 14, 'rasiya', 'hamza', 'sister', '', '', '', '', '', '', '', '', 76, NULL, '', '100000', '10th', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 15, 'srikanth', 'vasanth', 'father', '', '', '6754645', '546475875', 'colors garden', 'opposite museum', 'banglore', 'karnataka', 76, NULL, '', '', 'degree', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 16, 'jayasree', 'anand', 'mother', 'hr@yahoo.co.in', '04665666871', '0466542561', '098987678', 'indian bank', 'opposite museum', 'chennai', 'tamil nadu', 76, NULL, '', '', 'bca', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 17, 'krishnakumar', 'menon', 'father', '', '', '764832', '546475875', 'bharath electricals', 'chinmaya tower', 'cochin', 'kerala', 76, NULL, 'business', '12323334', 'b.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 18, 'chandrashekar', 'menon', 'father', '', '04665666871', '0484872563', '546475875', 'bharath electricals', 'apsara tower', 'banglore', 'karnataka', 76, NULL, 'accountant', '', 'degree', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 19, 'govind', 'mohan', 'brother', '', '', '', '', 'ax pvt ltd', 'chinmaya tower', 'banglore', 'karnataka', 76, NULL, 'office assistant', '', 'bca', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Dumping data for table `gxc_auth_assignment`
--

INSERT INTO `gxc_auth_assignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Admin', '1', NULL, 'N;'),
('Admin', '2', NULL, 'N;'),
('Admin', '7', NULL, 'N;'),
('Editor', '1', NULL, 'N;'),
('Admin', '3', NULL, 'N;'),
('Guest', '3', NULL, 'N;');

--
-- Dumping data for table `gxc_auth_item`
--

INSERT INTO `gxc_auth_item` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Guest', 2, 'Guest', 'return Yii::app()->user->isGuest;', 'N;'),
('Authenticated', 2, 'Authenticated', 'return !Yii::app()->user->isGuest;', 'N;'),
('Admin', 2, NULL, NULL, 'N;'),
('Reporter', 2, 'Reporter', NULL, 'N;'),
('Besite.*', 1, NULL, NULL, 'N;'),
('Besite.Index', 0, NULL, NULL, 'N;'),
('Besite.Error', 0, NULL, NULL, 'N;'),
('Besite.Login', 0, NULL, NULL, 'N;'),
('Besite.Logout', 0, NULL, NULL, 'N;'),
('Editor', 2, 'Editor', NULL, 'N;'),
('Beblock.*', 1, NULL, NULL, 'N;'),
('Becontentlist.*', 1, NULL, NULL, 'N;'),
('Beinstall.*', 1, NULL, NULL, 'N;'),
('Bemenu.*', 1, NULL, NULL, 'N;'),
('Bemenuitem.*', 1, NULL, NULL, 'N;'),
('Beobject.*', 1, NULL, NULL, 'N;'),
('Bepage.*', 1, NULL, NULL, 'N;'),
('Beresource.*', 1, NULL, NULL, 'N;'),
('Besettings.*', 1, NULL, NULL, 'N;'),
('Betaxonomy.*', 1, NULL, NULL, 'N;'),
('Beterm.*', 1, NULL, NULL, 'N;'),
('Beuser.*', 1, NULL, NULL, 'N;'),
('Translate.Edit.*', 1, NULL, NULL, 'N;'),
('Translate.Translate.*', 1, NULL, NULL, 'N;'),
('Beblock.Create', 0, NULL, NULL, 'N;'),
('Beblock.Admin', 0, NULL, NULL, 'N;'),
('Beblock.View', 0, NULL, NULL, 'N;'),
('Beblock.Update', 0, NULL, NULL, 'N;'),
('Beblock.Delete', 0, NULL, NULL, 'N;'),
('Beblock.SuggestBlock', 0, NULL, NULL, 'N;'),
('Beblock.SuggestBlocks', 0, NULL, NULL, 'N;'),
('Becontentlist.Create', 0, NULL, NULL, 'N;'),
('Becontentlist.Admin', 0, NULL, NULL, 'N;'),
('Becontentlist.View', 0, NULL, NULL, 'N;'),
('Becontentlist.Update', 0, NULL, NULL, 'N;'),
('Becontentlist.Delete', 0, NULL, NULL, 'N;'),
('Becontentlist.DynamicTerms', 0, NULL, NULL, 'N;'),
('Becontentlist.SuggestTags', 0, NULL, NULL, 'N;'),
('Becontentlist.SuggestContent', 0, NULL, NULL, 'N;'),
('Beinstall.Run', 0, NULL, NULL, 'N;'),
('Bemenu.Create', 0, NULL, NULL, 'N;'),
('Bemenu.Admin', 0, NULL, NULL, 'N;'),
('Bemenu.View', 0, NULL, NULL, 'N;'),
('Bemenu.Update', 0, NULL, NULL, 'N;'),
('Bemenu.Delete', 0, NULL, NULL, 'N;'),
('Bemenuitem.Create', 0, NULL, NULL, 'N;'),
('Bemenuitem.Admin', 0, NULL, NULL, 'N;'),
('Bemenuitem.View', 0, NULL, NULL, 'N;'),
('Bemenuitem.Update', 0, NULL, NULL, 'N;'),
('Bemenuitem.Delete', 0, NULL, NULL, 'N;'),
('Bemenuitem.ChangeOrder', 0, NULL, NULL, 'N;'),
('Bemenuitem.DynamicParentMenuItem', 0, NULL, NULL, 'N;'),
('Bemenuitem.SuggestPage', 0, NULL, NULL, 'N;'),
('Bemenuitem.SuggestTerm', 0, NULL, NULL, 'N;'),
('Beobject.Create', 0, NULL, NULL, 'N;'),
('Beobject.Update', 0, NULL, NULL, 'N;'),
('Beobject.View', 0, NULL, NULL, 'N;'),
('Beobject.Admin', 0, NULL, NULL, 'N;'),
('Beobject.Pending', 0, NULL, NULL, 'N;'),
('Beobject.Draft', 0, NULL, NULL, 'N;'),
('Beobject.Published', 0, NULL, NULL, 'N;'),
('Beobject.SuggestPeople', 0, NULL, NULL, 'N;'),
('Beobject.CheckTransferRights', 0, NULL, NULL, 'N;'),
('Beobject.SuggestTags', 0, NULL, NULL, 'N;'),
('Beobject.Delete', 0, NULL, NULL, 'N;'),
('Bepage.Create', 0, NULL, NULL, 'N;'),
('Bepage.Admin', 0, NULL, NULL, 'N;'),
('Bepage.View', 0, NULL, NULL, 'N;'),
('Bepage.Update', 0, NULL, NULL, 'N;'),
('Bepage.Delete', 0, NULL, NULL, 'N;'),
('Bepage.ChangeLayout', 0, NULL, NULL, 'N;'),
('Bepage.InheritParent', 0, NULL, NULL, 'N;'),
('Bepage.ChangeParent', 0, NULL, NULL, 'N;'),
('Bepage.SuggestPage', 0, NULL, NULL, 'N;'),
('Beresource.Create', 0, NULL, NULL, 'N;'),
('Beresource.CreateFrame', 0, NULL, NULL, 'N;'),
('Beresource.Admin', 0, NULL, NULL, 'N;'),
('Beresource.View', 0, NULL, NULL, 'N;'),
('Beresource.Update', 0, NULL, NULL, 'N;'),
('Beresource.Delete', 0, NULL, NULL, 'N;'),
('Besettings.System', 0, NULL, NULL, 'N;'),
('Besettings.General', 0, NULL, NULL, 'N;'),
('Betaxonomy.Create', 0, NULL, NULL, 'N;'),
('Betaxonomy.Admin', 0, NULL, NULL, 'N;'),
('Betaxonomy.View', 0, NULL, NULL, 'N;'),
('Betaxonomy.Update', 0, NULL, NULL, 'N;'),
('Betaxonomy.Delete', 0, NULL, NULL, 'N;'),
('Beterm.Create', 0, NULL, NULL, 'N;'),
('Beterm.Admin', 0, NULL, NULL, 'N;'),
('Beterm.View', 0, NULL, NULL, 'N;'),
('Beterm.Update', 0, NULL, NULL, 'N;'),
('Beterm.Delete', 0, NULL, NULL, 'N;'),
('Beterm.ChangeOrder', 0, NULL, NULL, 'N;'),
('Beterm.DynamicParentTerms', 0, NULL, NULL, 'N;'),
('Beuser.ChangePass', 0, NULL, NULL, 'N;'),
('Beuser.UpdateSettings', 0, NULL, NULL, 'N;'),
('Beuser.Create', 0, NULL, NULL, 'N;'),
('Beuser.Admin', 0, NULL, NULL, 'N;'),
('Beuser.View', 0, NULL, NULL, 'N;'),
('Beuser.Update', 0, NULL, NULL, 'N;'),
('Beuser.Delete', 0, NULL, NULL, 'N;'),
('Translate.Edit.Create', 0, NULL, NULL, 'N;'),
('Translate.Edit.Update', 0, NULL, NULL, 'N;'),
('Translate.Edit.Delete', 0, NULL, NULL, 'N;'),
('Translate.Edit.Admin', 0, NULL, NULL, 'N;'),
('Translate.Edit.Missing', 0, NULL, NULL, 'N;'),
('Translate.Edit.Missingdelete', 0, NULL, NULL, 'N;'),
('Translate.Translate.Index', 0, NULL, NULL, 'N;');

--
-- Dumping data for table `gxc_auth_item_child`
--

INSERT INTO `gxc_auth_item_child` (`parent`, `child`) VALUES
('Authenticated', 'Besite.Error'),
('Authenticated', 'Besite.Login'),
('Authenticated', 'Besite.Logout'),
('Guest', 'Besite.Error'),
('Guest', 'Besite.Login'),
('Guest', 'Besite.Logout'),
('Reporter', 'Besite.Error'),
('Reporter', 'Besite.Index'),
('Reporter', 'Besite.Login'),
('Reporter', 'Besite.Logout');

--
-- Dumping data for table `gxc_autologin_tokens`
--

INSERT INTO `gxc_autologin_tokens` (`user_id`, `token`) VALUES
(1, 'd25e5dad0a55f98daa2895a28b412de9cb536e96'),
(2, '7307a47601ee0e1b84701a6511f2bcac43ceb255');

--
-- Dumping data for table `gxc_block`
--

INSERT INTO `gxc_block` (`block_id`, `name`, `type`, `created`, `creator`, `updated`, `params`) VALUES
(8, 'Menu', 'menu', 1331192394, 1, 1331200806, 'a:1:{s:7:"menu_id";s:1:"1";}'),
(2, 'Introduce Block - This is a simple HTML Block', 'html', 1328778200, 1, 1331192355, 'a:1:{s:4:"html";s:548:"<h2>Wiwo Inc</h2>\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at venenatis lacus. Quisque aliquam facilisis augue, et viverra mauris pellentesque sed. Quisque ut nibh at eros commodo auctor nec eu augue. Vivamus dignissim sollicitudin aliquet. Vivamus sed commodo turpis. Fusce tempor euismod accumsan. Nunc non tincidunt dui. Vestibulum bibendum ligula nec enim lobortis et euismod arcu gravida. Aenean blandit turpis id libero varius hendrerit. Nunc vitae malesuada elit. Nam sit amet arcu vel eros commodo euismod.</p>\r\n\r\n";}'),
(3, 'Footer Block - Just a simple HTML Block', 'html', 1328780295, 1, 1328782216, 'a:1:{s:4:"html";s:474:" <div class="info wide">\r\n        	<h2>Contact Us</h2>\r\n<p>GXC CMS is an open source CMS written on Yii Framework. It has been developed since July 2011 by <a href="http://www.nganhtuan.com">Tuan Nguyen </a> and <a href="http://www.tringuyen.me">Tri Nguyen</a> from <a href="http://www.gxcsolutions.com">GxcSolutions</a>. Happy coding!  </p>\r\n        	<p>We love to talk and share, feel free to contact us at <br /> info@gxcsolutions.com\r\n        	<p>&copy; 2012</p>\r\n</div>";}'),
(4, 'This is a sample of a content list render Block', 'listview', 1328781868, 1, 1331129708, 'a:2:{s:12:"content_list";a:1:{i:0;s:1:"1";}s:12:"display_type";s:1:"0";}'),
(5, 'Error Notification Block', 'error_notification', 1328862233, 1, 1328862233, 'a:0:{}'),
(6, 'Content detail view ', 'content_detail_view', 1328863997, 1, 1328863997, 'a:0:{}'),
(7, 'Div class clear Both Block', 'html', 1328979146, 1, 1328979146, 'a:1:{s:4:"html";s:30:"<div style="clear:both"></div>";}'),
(9, 'signin', 'signin', 1331200695, 1, 1331200695, 'a:0:{}'),
(10, 'NewMenu', 'menu', 1331201434, 1, 1331201434, 'a:1:{s:7:"menu_id";s:1:"5";}'),
(12, 'mainmenu-block', 'menu', 1331278488, 1, 1331278488, 'a:1:{s:7:"menu_id";s:1:"5";}'),
(13, 'mainmenu-block', 'menu', 1331278590, 1, 1331278590, 'a:1:{s:7:"menu_id";s:1:"5";}'),
(14, 'test', 'html', 1331556695, 1, 1331556695, 'a:1:{s:4:"html";s:1450:"This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>This is my Sample Block <br/>";}'),
(15, 'login', 'signin', 1334062795, 1, 1334062795, 'a:0:{}');

--
-- Dumping data for table `gxc_content_list`
--

INSERT INTO `gxc_content_list` (`content_list_id`, `name`, `value`, `created`) VALUES
(1, 'List of newest articles for the homepage', 'a:9:{s:4:"type";s:1:"2";s:4:"lang";a:1:{i:0;s:1:"0";}s:12:"content_type";a:1:{i:0;s:7:"article";}s:5:"terms";a:1:{i:0;s:1:"0";}s:4:"tags";s:0:"";s:6:"paging";s:1:"0";s:6:"number";s:1:"2";s:8:"criteria";s:1:"1";s:11:"manual_list";a:0:{}}', 1328781851);

--
-- Dumping data for table `gxc_language`
--

INSERT INTO `gxc_language` (`lang_id`, `lang_name`, `lang_desc`, `lang_required`, `lang_active`, `lang_short`) VALUES
(1, 'vi_vn', 'Vietnamese', 0, 1, 'vi'),
(2, 'en_us', 'English', 0, 1, 'en');

--
-- Dumping data for table `gxc_menu`
--

INSERT INTO `gxc_menu` (`menu_id`, `menu_name`, `menu_description`, `lang`, `guid`) VALUES
(1, 'Blog', 'Blog', 2, '4f5745dbd1065'),
(3, 'My Test Menu', 'Blog', 2, '4f585b7ae23fc'),
(4, 'math', 'math', 2, '4f588296d59ef'),
(5, 'New Menu', 'Menu Menu', 2, '4f58850b3faa8'),
(6, 'mainmenu', 'mainmenu', 2, '4f59b1c223b6a');

--
-- Dumping data for table `gxc_menu_item`
--

INSERT INTO `gxc_menu_item` (`menu_item_id`, `menu_id`, `name`, `description`, `type`, `value`, `parent`, `order`) VALUES
(6, 3, 'sddf', 'fghfjtfdfu', '3', 'vhgvft', 5, 0),
(5, 3, 'sddf', 'fghfjtfdfu', '3', 'vhgvft', 0, 0),
(4, 1, 'sddf', 'fghfjtfdfu', '3', 'vhgvft', 0, 0),
(7, 3, 'Home', '', '1', 'www', 0, 1),
(8, 3, 'Contact Us', '', '1', '1212', 0, 2),
(9, 5, 'Sub Menu', 'Submenu', '1', '4', 0, 0),
(10, 5, 'Sub Menu 2', 'Submenu', '1', '4', 0, 1),
(11, 3, 'subnew', 'subnew', '1', '1', 6, 0),
(12, 3, 'new sub ', 'new sub ', '3', '4', 0, 3),
(13, 6, 'mainmenu-sub 1', 'mainmenu-sub 1', '1', '1', 0, 0),
(14, 6, 'mainmenu-sub 2', 'mainmenu-sub 2', '1', '1', 0, 1);

--
-- Dumping data for table `gxc_object`
--

INSERT INTO `gxc_object` (`object_id`, `object_author`, `object_date`, `object_date_gmt`, `object_content`, `object_title`, `object_excerpt`, `object_status`, `comment_status`, `object_password`, `object_name`, `object_modified`, `object_modified_gmt`, `object_content_filtered`, `object_parent`, `guid`, `object_type`, `comment_count`, `object_slug`, `object_description`, `object_keywords`, `lang`, `object_author_name`, `total_number_meta`, `total_number_resource`, `tags`, `object_view`, `like`, `dislike`, `rating_scores`, `rating_average`, `layout`) VALUES
(5, 1, 1328780832, 1328755632, '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac elit tincidunt dui auctor porta sit amet vel eros. Etiam bibendum vulputate odio at rutrum. In lectus tellus, commodo a cursus a, lacinia ac turpis. Cras sodales lobortis est, sit amet blandit tortor pharetra quis. Integer blandit turpis eget est faucibus egestas non non lacus. Sed mi eros, convallis vel consequat eleifend, gravida quis enim. Duis lectus libero, vestibulum sed pellentesque quis, elementum scelerisque orci. Pellentesque vitae lectus in justo tempus iaculis.</span></p>\r\n<p style="text-align: justify; font-size: 11px; line-height: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 14px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; ">\r\n	Donec bibendum tincidunt diam, euismod molestie orci faucibus eu. Proin non tortor urna, at vulputate orci. Curabitur vel ligula magna. Sed eu massa enim. Suspendisse erat diam, sodales sed tristique at, accumsan et risus. In molestie aliquet nisl ac vestibulum. Aliquam eros dolor, laoreet ac iaculis eget, pretium in lectus. Suspendisse in nisi sapien. Vestibulum in scelerisque quam. Donec nec velit ligula, ut pulvinar nibh. Nulla iaculis, diam eget porta imperdiet, odio tortor semper odio, vel lobortis diam erat vel nisi.</p>\r\n<p style="text-align: justify; font-size: 11px; line-height: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 14px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; ">\r\n	Sed in neque diam. Aenean nec neque lorem, id rutrum tellus. Sed at metus quam. Sed adipiscing lacus enim. Curabitur pharetra mauris a tortor bibendum vitae scelerisque erat congue. Cras molestie tincidunt elementum. Proin quis enim risus, ut porta erat. Vestibulum tristique nisi et magna viverra placerat. Phasellus varius, est quis aliquam suscipit, felis mauris malesuada lectus, nec rutrum urna libero vitae est. Proin quis mauris id arcu cursus euismod nec sed purus. Duis lectus metus, tincidunt ac placerat eu, rutrum id odio. Donec vulputate lorem a mi sagittis imperdiet. In metus sem, faucibus sed tempor non, lacinia vitae quam.</p>\r\n<p style="text-align: justify; font-size: 11px; line-height: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 14px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; ">\r\n	In id hendrerit purus. Suspendisse molestie nisl sagittis nisl laoreet consequat. Mauris et quam ligula. Praesent vulputate blandit iaculis. Aliquam erat volutpat. In elementum porta ligula ut semper. Donec at felis purus, id accumsan quam. Aliquam molestie aliquam odio consectetur volutpat. Cras neque mi, ullamcorper at laoreet fermentum, feugiat sed leo. Praesent placerat mattis mauris at auctor. Sed odio nisl, molestie in dapibus nec, condimentum eu dui.</p>\r\n<p style="text-align: justify; font-size: 11px; line-height: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 14px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; ">\r\n	Praesent ligula neque, semper vitae lobortis vestibulum, tempor vel sapien. Nullam feugiat felis id enim iaculis posuere. Maecenas vitae lectus at ligula condimentum sodales. Proin vitae nisl sit amet nulla rutrum vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean mollis luctus nisi, ac congue quam vehicula nec. Donec eget ipsum dolor. Aliquam erat volutpat. Fusce in turpis ante, quis fermentum magna. Maecenas eu tortor ac quam tincidunt euismod ac sed tellus. Sed libero nisl, posuere id ultrices et, aliquet vitae turpis. Morbi non odio ut velit tempus pharetra. Duis sagittis elit id nisi tincidunt vulputate.</p>\r\n', 'This is the sample post number 1', 'Donec bibendum tincidunt diam, euismod molestie orci faucibus eu. Proin non tortor urna, at vulputate orci. Curabitur vel ligula magna. Sed eu massa enim. Suspendisse erat diam, sodales sed tristique at, accumsan et risus. In molestie aliquet nisl ac vestibulum.', 1, 1, NULL, 'This is the sample post number 1', 1328867986, 1328842786, NULL, 0, '4f33962019cfe', 'article', 0, 'this-is-the-sample-post-number-1', 'Donec bibendum tincidunt diam, euismod molestie orci faucibus eu. Proin non tortor urna, at vulputate orci. Curabitur vel ligula magna. Sed eu massa enim. Suspendisse erat diam, sodales sed tristique at, accumsan et risus. In molestie aliquet nisl ac vestibulum.', '', 2, 'Admin', 0, 0, '', 0, 0, 0, 0, 0, NULL),
(6, 1, 1328780861, 1328755661, '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac elit tincidunt dui auctor porta sit amet vel eros. Etiam bibendum vulputate odio at rutrum. In lectus tellus, commodo a cursus a, lacinia ac turpis. Cras sodales lobortis est, sit amet blandit tortor pharetra quis. Integer blandit turpis eget est faucibus egestas non non lacus. Sed mi eros, convallis vel consequat eleifend, gravida quis enim. Duis lectus libero, vestibulum sed pellentesque quis, elementum scelerisque orci. Pellentesque vitae lectus in justo tempus iaculis.</span></p>\r\n<p style="text-align: justify; font-size: 11px; line-height: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 14px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; ">\r\n	Donec bibendum tincidunt diam, euismod molestie orci faucibus eu. Proin non tortor urna, at vulputate orci. Curabitur vel ligula magna. Sed eu massa enim. Suspendisse erat diam, sodales sed tristique at, accumsan et risus. In molestie aliquet nisl ac vestibulum. Aliquam eros dolor, laoreet ac iaculis eget, pretium in lectus. Suspendisse in nisi sapien. Vestibulum in scelerisque quam. Donec nec velit ligula, ut pulvinar nibh. Nulla iaculis, diam eget porta imperdiet, odio tortor semper odio, vel lobortis diam erat vel nisi.</p>\r\n<p style="text-align: justify; font-size: 11px; line-height: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 14px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; ">\r\n	Sed in neque diam. Aenean nec neque lorem, id rutrum tellus. Sed at metus quam. Sed adipiscing lacus enim. Curabitur pharetra mauris a tortor bibendum vitae scelerisque erat congue. Cras molestie tincidunt elementum. Proin quis enim risus, ut porta erat. Vestibulum tristique nisi et magna viverra placerat. Phasellus varius, est quis aliquam suscipit, felis mauris malesuada lectus, nec rutrum urna libero vitae est. Proin quis mauris id arcu cursus euismod nec sed purus. Duis lectus metus, tincidunt ac placerat eu, rutrum id odio. Donec vulputate lorem a mi sagittis imperdiet. In metus sem, faucibus sed tempor non, lacinia vitae quam.</p>\r\n<p style="text-align: justify; font-size: 11px; line-height: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 14px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; ">\r\n	In id hendrerit purus. Suspendisse molestie nisl sagittis nisl laoreet consequat. Mauris et quam ligula. Praesent vulputate blandit iaculis. Aliquam erat volutpat. In elementum porta ligula ut semper. Donec at felis purus, id accumsan quam. Aliquam molestie aliquam odio consectetur volutpat. Cras neque mi, ullamcorper at laoreet fermentum, feugiat sed leo. Praesent placerat mattis mauris at auctor. Sed odio nisl, molestie in dapibus nec, condimentum eu dui.</p>\r\n<p style="text-align: justify; font-size: 11px; line-height: 14px; margin-top: 0px; margin-right: 0px; margin-bottom: 14px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; ">\r\n	Praesent ligula neque, semper vitae lobortis vestibulum, tempor vel sapien. Nullam feugiat felis id enim iaculis posuere. Maecenas vitae lectus at ligula condimentum sodales. Proin vitae nisl sit amet nulla rutrum vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean mollis luctus nisi, ac congue quam vehicula nec. Donec eget ipsum dolor. Aliquam erat volutpat. Fusce in turpis ante, quis fermentum magna. Maecenas eu tortor ac quam tincidunt euismod ac sed tellus. Sed libero nisl, posuere id ultrices et, aliquet vitae turpis. Morbi non odio ut velit tempus pharetra. Duis sagittis elit id nisi tincidunt vulputate.</p>\r\n', 'This is the sample post number 2', 'In id hendrerit purus. Suspendisse molestie nisl sagittis nisl laoreet consequat. Mauris et quam ligula. Praesent vulputate blandit iaculis. Aliquam erat volutpat. In elementum porta ligula ut semper.', 1, 1, NULL, 'This is the sample post number 2', 1328867993, 1328842793, NULL, 0, '4f33963d6b7d6', 'article', 0, 'this-is-the-sample-post-number-2', 'In id hendrerit purus. Suspendisse molestie nisl sagittis nisl laoreet consequat. Mauris et quam ligula. Praesent vulputate blandit iaculis. Aliquam erat volutpat. In elementum porta ligula ut semper.', '', 2, 'Admin', 0, 0, '', 0, 0, 0, 0, 0, NULL),
(7, 1, 1331129591, 1331104391, '<p>\r\n	<strong>This is My Test Content Waw!!</strong></p>\r\n', 'My New Content', '', 1, 1, NULL, 'My New Content', 1331129591, 1331104391, NULL, 0, '4f576cf7df484', 'article', 0, 'my-new-content', '', '', 2, '', 0, 0, '', 0, 0, 0, 0, 0, NULL),
(8, 1, 1331129792, 1331104592, '<p>\r\n	wwwwwewewewewew</p>\r\n', 'www', '', 1, 1, NULL, 'www', 1331129792, 1331104592, NULL, 0, '4f576dc05c18e', 'article', 0, 'www', '', '', 2, '', 0, 0, '', 0, 0, 0, 0, 0, NULL),
(9, 1, 1331384250, 1331359050, '<p>\r\n	&nbsp;</p>\r\n<div id="media_1331383992988_box">\r\n	<script type=''text/javascript'' src=''http://wiwo-4/osv2/osadmin/assets/ckeditor/plugins/media/swfobject.js''></script>\r\n	<div id="media_1331383992988">\r\n		<img height="" src="http://wiwo-4/osv2/osadmin/assets/ckeditor/plugins/media/images/player.png" width="" /></div>\r\n	<script id=''media_1331383992988_script'' type=''text/javascript''>\r\n  var so = new SWFObject(''http://wiwo-4/osv2/osadmin/assets/ckeditor/plugins/media/player.swf'',''player_1331383992988'','''','''',''9'');\r\n  so.addParam(''allowfullscreen'',''true'');\r\n  so.addParam(''allowscriptaccess'',''always'');\r\n  so.addParam(''wmode'',''opaque'');\r\n  so.addVariable(''replacement'',''http://wiwo-4/osv2/osadmin/assets/ckeditor/plugins/media/images/player.png'');\r\n  so.addVariable(''plugins'',''gapro-1'');\r\n  so.addVariable(''gapro.accountid'',''UA-XXXXXXX-X'');\r\n  so.write(''media_1331383992988'');\r\n</script></div>\r\n', 'fhgf', '', 1, 1, NULL, 'fhgf', 1331384250, 1331359050, NULL, 0, '4f5b4fbad3e88', 'article', 0, 'fhgf', '', '', 2, '', 0, 0, '', 0, 0, 0, 0, 0, NULL),
(10, 1, 1331385181, 1331359981, '', 'upload', '', 1, 1, NULL, 'upload', 1331385181, 1331359981, NULL, 0, '4f5b535d775f2', 'article', 0, 'upload', '', '', 2, '', 0, 1, '', 0, 0, 0, 0, 0, NULL),
(11, 1, 1331556545, 1331531345, '', 'My Testing', '', 1, 1, NULL, 'My Testing', 1331556545, 1331531345, NULL, 0, '4f5df0c13fe53', 'article', 0, 'my-testing', '', '', 2, '', 0, 0, '', 0, 0, 0, 0, 0, NULL),
(12, 1, 1333391073, 1333365873, '<p>\r\n	qwqwqwqwqwqwqdfsdf</p>\r\n', 'qwqw', '', 2, 1, NULL, 'qwqw', 1333391089, 1333365889, NULL, 0, '4f79eee1dcc02', 'article', 0, 'qwqw', '', '', 2, '', 0, 0, '', 0, 0, 0, 0, 0, NULL);

--
-- Dumping data for table `gxc_object_meta`
--


--
-- Dumping data for table `gxc_object_resource`
--

INSERT INTO `gxc_object_resource` (`object_id`, `resource_id`, `resource_order`, `description`, `type`) VALUES
(10, 20, 1, '', 'thumbnail');

--
-- Dumping data for table `gxc_object_term`
--

INSERT INTO `gxc_object_term` (`object_id`, `term_id`) VALUES
(5, 1),
(6, 1),
(8, 1);

--
-- Dumping data for table `gxc_page`
--

INSERT INTO `gxc_page` (`page_id`, `name`, `title`, `description`, `parent`, `layout`, `slug`, `lang`, `guid`, `status`, `keywords`, `allow_index`, `allow_follow`, `display_type`) VALUES
(1, 'home', 'Homepage111', 'Homepage', 0, 'default', 'home', 2, '4f3373e0a0648', 1, 'Homepage', 1, 1, 'main'),
(2, 'Error', 'Error', 'Error Notification', 0, 'default', 'error', 2, '4f34d20be0f79', 1, 'Error Notification', 1, 1, 'empty'),
(3, 'Post Detail View', 'Post Detail View', 'Post Detail View', 1, 'default', 'post', 2, '4f34da1b41620', 1, 'Post Detail View', 1, 1, 'main'),
(4, 'Services', 'Services', 'wwwwww', 1, 'default', 'services', 2, '4f576d6fd562a', 1, 'ww', 1, 1, 'main'),
(5, 'mainmenu-sub 1', 'mainmenu-sub 1', 'mainmenu-sub 1', 1, 'default', 'Sub Menu', 2, '4f59b3164498c', 1, 'mainmenu-sub 1', 1, 1, 'main');

--
-- Dumping data for table `gxc_page_block`
--

INSERT INTO `gxc_page_block` (`page_id`, `block_id`, `block_order`, `status`, `region`) VALUES
(5, 2, 2, 1, 1),
(5, 10, 1, 1, 2),
(5, 13, 1, 1, 3),
(1, 3, 1, 1, 2),
(2, 5, 1, 1, 1),
(3, 6, 1, 1, 1),
(4, 3, 1, 1, 2),
(3, 3, 1, 1, 2),
(4, 7, 2, 1, 1),
(4, 4, 1, 1, 1),
(4, 10, 3, 1, 1),
(1, 14, 1, 1, 1);

--
-- Dumping data for table `gxc_resource`
--

INSERT INTO `gxc_resource` (`resource_id`, `resource_name`, `resource_body`, `resource_path`, `resource_type`, `created`, `updated`, `creator`, `where`) VALUES
(17, 'q', '', '2012\\03\\y0gwbnrt.jpg', 'image', 1331129850, 1331129850, 1, 'local'),
(18, 'laiju_hover.png', '', '2012\\03\\E3zujghE.png', 'image', 1331382427, 1331382427, 1, 'local'),
(19, 'abstract (2).jpg', '', '2012\\03\\caZcElYA.jpg', 'image', 1331385075, 1331385075, 1, 'local'),
(20, 'abstract (2).jpg', '', '2012\\03\\2YllQUem.jpg', 'image', 1331385146, 1331385146, 1, 'local'),
(21, 'Lighthouse.jpg', '', '2012\\03\\fsQernk5.jpg', 'image', 1331386198, 1331386198, 1, 'local'),
(22, 'Lighthouse.jpg', '', '2012\\03\\07JPCrG8.jpg', 'image', 1331386204, 1331386204, 1, 'local'),
(23, 'Koala.jpg', '', '2012\\03\\Pq8SNdss.jpg', 'image', 1331388443, 1331388443, 1, 'local'),
(24, 'Lighthouse.jpg', '', '2012\\03\\mwAVUAvQ.jpg', 'image', 1331539288, 1331539288, 1, 'local');

--
-- Dumping data for table `gxc_rights`
--


--
-- Dumping data for table `gxc_session`
--


--
-- Dumping data for table `gxc_settings`
--

INSERT INTO `gxc_settings` (`id`, `category`, `key`, `value`) VALUES
(3, 'system', 'support_email', '{{SUPPORT_EMAIL}}'),
(5, 'system', 'page_size', 's:2:"10";'),
(6, 'system', 'language_number', 's:1:"2";'),
(7, 'general', 'site_name', 's:25:"ECLCã€€å¹¼å…’ç™¼å±•ä¸­å¿ƒ";'),
(8, 'general', 'site_title', 's:0:"";'),
(9, 'general', 'site_description', 's:0:"";'),
(13, 'general', 'homepage', 's:4:"home";'),
(14, 'general', 'slogan', 's:0:"";'),
(15, 'general', 'post_link', 's:4:"post";'),
(16, 'general', 'error_link', 's:5:"error";'),
(17, 'system', 'keep_file_name_upload', 's:1:"0";');

--
-- Dumping data for table `gxc_source_message`
--


--
-- Dumping data for table `gxc_tag`
--


--
-- Dumping data for table `gxc_tag_relationships`
--


--
-- Dumping data for table `gxc_taxonomy`
--

INSERT INTO `gxc_taxonomy` (`taxonomy_id`, `name`, `description`, `type`, `lang`, `guid`) VALUES
(1, 'Article Categories', 'Article Categories', 'article', 2, '4f336d87ac576'),
(2, 'Event Categories', 'Event Categories', 'event', 2, '4f336d99f1482');

--
-- Dumping data for table `gxc_term`
--

INSERT INTO `gxc_term` (`term_id`, `taxonomy_id`, `name`, `description`, `slug`, `parent`, `order`) VALUES
(1, 1, 'Uncategories', 'Uncategories', 'uncategories', 0, 1),
(2, 2, 'Uncategories', 'Uncategories', 'uncategories-event', 0, 1);

--
-- Dumping data for table `gxc_transfer`
--

INSERT INTO `gxc_transfer` (`transfer_id`, `object_id`, `from_user_id`, `to_user_id`, `before_status`, `after_status`, `type`, `note`, `time`) VALUES
(43, 1, 1, 0, 2, 1, 3, NULL, 1328760601),
(46, 4, 1, 0, 2, 1, 3, NULL, 1328760876),
(47, 7, 1, 0, 2, 1, 3, NULL, 1331129591),
(48, 8, 1, 0, 2, 1, 3, NULL, 1331129792),
(49, 9, 1, 0, 2, 1, 3, NULL, 1331384250),
(50, 10, 1, 0, 2, 1, 3, NULL, 1331385181),
(51, 11, 1, 0, 2, 1, 3, NULL, 1331556545),
(52, 12, 1, 0, 2, 2, 3, NULL, 1333391073),
(53, 12, 1, 0, 2, 2, 3, NULL, 1333391089);

--
-- Dumping data for table `gxc_translated_message`
--


--
-- Dumping data for table `gxc_user`
--

INSERT INTO `gxc_user` (`user_id`, `username`, `user_url`, `display_name`, `password`, `salt`, `email`, `fbuid`, `status`, `created_time`, `updated_time`, `recent_login`, `user_activation_key`, `confirmed`, `gender`, `location`, `bio`, `birthday_month`, `birthday_day`, `birthday_year`, `avatar`, `email_site_news`, `email_search_alert`, `email_recover_key`) VALUES
(1, 'admin', 'admin', 'Admin', '8f1a6540fd2f26220ce638600c9357a4', 'sdad12313ssgdpahcxrwwqas', 'admin@localhost.com', NULL, 1, 1331101694, 1334788618, 1334788618, '', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL),
(2, 'rajith', '', 'rajith', '99b7ae314cd476e23bd28380c7b14f3e', 'sdad12313ssgdpahcxrwwqas', 'rajith@wiwoinc.com', NULL, 1, 1331116897, 1331315649, 1331315649, '', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL),
(3, 'trimurtycomputers', '', 'trimurtycomputers', '88cb21b9e149360759b3b855bc39cfc9', 'sdad12313ssgdpahcxrwwqas', 'trimurtycomputers@gmail.com', NULL, 1, 1334058667, 1334058667, 1334058667, '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL);

--
-- Dumping data for table `gxc_user_meta`
--


--
-- Dumping data for table `individual_payslip_categories`
--


--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`) VALUES
(1, 'English', 'en'),
(2, 'Spanish', 'es');

--
-- Dumping data for table `liabilities`
--


--
-- Dumping data for table `logo`
--


--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `parent_id`, `title`, `url`, `class`, `position`, `group_id`) VALUES
(1, 0, 'Home', '/', '', 1, 1),
(2, 0, 'About', '/about.html', '', 2, 1),
(3, 2, 'Company Profile', '/company-profile.html', '', 1, 1),
(19, 0, 'Affiliate', '/affiliate.html', '', 3, 2),
(18, 0, 'Forum', '/forum', '', 2, 2),
(17, 0, 'Make Money', '/make-money.html', '', 1, 2),
(7, 0, 'Contact Us', '/contact-us.html', '', 5, 1),
(8, 0, 'Blog', '/blog', '', 4, 1),
(9, 0, 'Products', '/products', '', 3, 1),
(10, 9, 'Handicraft', '/products/handicraft', '', 1, 1),
(11, 9, 'Furniture', '/products/furniture', '', 2, 1),
(12, 10, 'Tissue Box', '/products/handicraft/tissue', '', 1, 1),
(13, 10, 'Frame', '/products/handicraft/frame', '', 2, 1),
(14, 11, 'Cabinet', '/products/furniture/cabinet', '', 1, 1),
(15, 11, 'Chair', '/products/furniture/chair', '', 2, 1),
(16, 11, 'Table', '/products/furniture/table', '', 3, 1),
(20, 0, 'Help', '/help', '', 4, 2),
(21, 20, 'Support Center', '/support-center.html', '', 1, 2),
(22, 20, 'Sitemap', '/sitemap.html', '', 2, 2),
(23, 0, 'Author Dashboard', '/author-dashboard', '', 1, 3),
(24, 0, 'My Profile', '/member/profile', '', 2, 3),
(25, 0, 'Settings', '/member/settings', '', 3, 3),
(26, 0, 'Downloads', '/member/downloads', '', 4, 3),
(27, 0, 'Bookmarks', '/member/bookmarks', '', 5, 3),
(28, 0, 'Logout', '/logout.php', '', 6, 3),
(29, 25, 'Profile', '/member/settings/profile', '', 1, 3),
(30, 25, 'Change Password', '/member/settings/password', '', 2, 3),
(31, 0, 'Menu 1', '', '', 1, 4),
(32, 31, 'Menu 1.1', '', '', 1, 4),
(33, 31, 'Menu 1.2', '', '', 2, 4),
(34, 0, 'Menu 2', '', '', 2, 4),
(35, 34, 'Menu 2.1', '', '', 1, 4),
(36, 35, 'Menu 2.1.1', '', '', 1, 4),
(37, 35, 'Menu 2.1.2', '', '', 2, 4),
(38, 34, 'Menu 2.2', '', '', 2, 4),
(39, 21, 'Popular Files', '/popular', '', 1, 2),
(40, 21, 'Top Authors', '/top', '', 2, 2),
(41, 21, 'Wordpress', '/wp', '', 3, 2);

--
-- Dumping data for table `menu_group`
--

INSERT INTO `menu_group` (`id`, `title`) VALUES
(1, 'Main Menu'),
(2, 'Footer Menu'),
(3, 'Member Menu'),
(4, 'Admin Menu');

--
-- Dumping data for table `message`
--


--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `subject`, `body`, `is_read`, `deleted_by`, `created_at`) VALUES
(1, 1, 1, 's', '<p>\r\n	s</p>\r\n', '1', NULL, '2012-06-13 13:24:25');

--
-- Dumping data for table `message_user`
--


--
-- Dumping data for table `monthly_payslips`
--


--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `author_id`, `created_at`, `updated_at`) VALUES
(1, 'dafds', '<p>&nbsp;fadsfadsfsdf</p>', 1, '2012-02-20 16:50:47', '2012-02-20 16:50:47');

--
-- Dumping data for table `news_comments`
--


--
-- Dumping data for table `payroll_categories`
--


--
-- Dumping data for table `period_entries`
--

INSERT INTO `period_entries` (`id`, `month_date`, `batch_id`, `subject_id`, `class_timing_id`, `employee_id`) VALUES
(1, '1970-01-01', 1, NULL, NULL, NULL);

--
-- Dumping data for table `privileges`
--

INSERT INTO `privileges` (`id`, `name`, `created_at`, `updated_at`, `description`) VALUES
(1, 'ExaminationControl', '2012-02-20 13:41:16', '2012-02-20 13:41:16', 'examination_control_privilege'),
(2, 'EnterResults', '2012-02-20 13:41:16', '2012-02-20 13:41:16', 'enter_results_privilege'),
(3, 'ViewResults', '2012-02-20 13:41:16', '2012-02-20 13:41:16', 'view_results_privilege'),
(4, 'Admission', '2012-02-20 13:41:16', '2012-02-20 13:41:16', 'admission_privilege'),
(5, 'StudentsControl', '2012-02-20 13:41:16', '2012-02-20 13:41:16', 'students_control_privilege'),
(6, 'ManageNews', '2012-02-20 13:41:16', '2012-02-20 13:41:16', 'manage_news_privilege'),
(7, 'ManageTimetable', '2012-02-20 13:41:16', '2012-02-20 13:41:16', 'manage_timetable_privilege'),
(8, 'StudentAttendanceView', '2012-02-20 13:41:16', '2012-02-20 13:41:16', 'student_attendance_view_privilege'),
(9, 'HrBasics', '2012-02-20 13:41:16', '2012-02-20 13:41:16', 'hr_basics_privilege'),
(10, 'AddNewBatch', '2012-02-20 13:41:16', '2012-02-20 13:41:16', 'add_new_batch_privilege'),
(11, 'SubjectMaster', '2012-02-20 13:41:16', '2012-02-20 13:41:16', 'subject_master_privilege'),
(12, 'EventManagement', '2012-02-20 13:41:16', '2012-02-20 13:41:16', 'event_management_privilege'),
(13, 'GeneralSettings', '2012-02-20 13:41:17', '2012-02-20 13:41:17', 'general_settings_privilege'),
(14, 'FinanceControl', '2012-02-20 13:41:17', '2012-02-20 13:41:17', 'finance_control_privilege'),
(15, 'TimetableView', '2012-02-20 13:41:17', '2012-02-20 13:41:17', 'timetable_view_privilege'),
(16, 'StudentAttendanceRegister', '2012-02-20 13:41:17', '2012-02-20 13:41:17', 'student_attendance_register_privilege'),
(17, 'EmployeeAttendance', '2012-02-20 13:41:17', '2012-02-20 13:41:17', 'employee_attendance_privilege'),
(18, 'PayslipPowers', '2012-02-20 13:41:17', '2012-02-20 13:41:17', 'payslip_powers_privilege'),
(19, 'EmployeeSearch', '2012-02-20 13:41:17', '2012-02-20 13:41:17', 'employee_search_privilege'),
(20, 'SMSManagement', '2012-02-20 13:41:17', '2012-02-20 13:41:17', 'sms_management_privilege');

--
-- Dumping data for table `privileges_users`
--


--
-- Dumping data for table `read`
--


--
-- Dumping data for table `reminders`
--


--
-- Dumping data for table `reply`
--


--
-- Dumping data for table `rights`
--


--
-- Dumping data for table `savedsearches`
--


--
-- Dumping data for table `schema_migrations`
--

INSERT INTO `schema_migrations` (`version`) VALUES
('20090622100004'),
('20090622102004'),
('20090622104053'),
('20090622104054'),
('20090622114927'),
('20090622115927'),
('20090703074822'),
('20090706170408'),
('20090715234257'),
('20090715234258'),
('20090717124241'),
('20090717126241'),
('20090718050113'),
('20090718050453'),
('20090718050921'),
('20090718052749'),
('20090731092833'),
('20090818045411'),
('20090818050018'),
('20090904071048'),
('20090904071548'),
('20090904071642'),
('20090904071905'),
('20090904071906'),
('20090904071907'),
('20090904071908'),
('20090904071909'),
('20090910062751'),
('20090914095002'),
('20090914114212'),
('20090916052300'),
('20090917052349'),
('20090917065256'),
('20090924081520'),
('20090926071527'),
('20091009093746'),
('20091026065251'),
('20091202050910'),
('20091202053600'),
('20091202104818'),
('20091207084711'),
('20091207085849'),
('20091207090412'),
('20091217191652'),
('20091217201118'),
('20091224063502'),
('20100403073735'),
('20100403092229'),
('20100403093355'),
('20100412105036'),
('20100412105116'),
('20100422110336'),
('20100426094532'),
('20100429093616'),
('20100505075459'),
('20100515063157'),
('20100515063814'),
('20100520073311'),
('20100524093457'),
('20100525055716'),
('20100602115152'),
('20100604103435'),
('20100604103916'),
('20100604104308'),
('20100604104759'),
('20100609073016'),
('20100609074544'),
('20100730092747'),
('20100731053458'),
('20100731054033'),
('20100731055437'),
('20101209063633'),
('20110221051223'),
('20110419101802'),
('20110510121550'),
('20110511053223'),
('20110516110336'),
('20110706114907'),
('20110711100500'),
('20110721122326'),
('20110728115723'),
('20110729055539'),
('20110730100503'),
('20110805072425'),
('20110810052138'),
('20110912062640'),
('20110928054502'),
('20111015111840'),
('20111020074717'),
('20111105052819');

--
-- Dumping data for table `sms_settings`
--

INSERT INTO `sms_settings` (`id`, `settings_key`, `is_enabled`) VALUES
(1, 'ApplicationEnabled', 0),
(2, 'ParentSmsEnabled', 0),
(3, 'EmployeeSmsEnabled', 0),
(4, 'StudentSmsEnabled', 0),
(5, 'ResultPublishEnabled', 0),
(6, 'StudentAdmissionEnabled', 0),
(7, 'ExamScheduleResultEnabled', 0),
(8, 'AttendanceEnabled', 0),
(9, 'NewsEventsEnabled', 0);

--
-- Dumping data for table `star`
--


--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `admission_no`, `class_roll_no`, `admission_date`, `first_name`, `middle_name`, `last_name`, `batch_id`, `date_of_birth`, `gender`, `blood_group`, `birth_place`, `nationality_id`, `language`, `religion`, `student_category_id`, `address_line1`, `address_line2`, `city`, `state`, `pin_code`, `country_id`, `phone1`, `phone2`, `email`, `immediate_contact_id`, `is_sms_enabled`, `photo_file_name`, `photo_content_type`, `photo_data`, `status_description`, `is_active`, `is_deleted`, `created_at`, `updated_at`, `has_paid_fees`, `photo_file_size`, `user_id`) VALUES
(1, '1', '', '2012-06-01', 'ashwin', '', 'krishnan', 1, '2007-01-10', 'M', 'B+', 'cochin', 76, 'malayalam', 'hindu', 2, '12/b ', 'skyline apartments', 'cochin', 'kerala', '676543', 76, '9754346512', '9876345692', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00', 0, NULL, 1),
(2, '2', '', '2012-06-01', 'lathika', '', 'lakshmi', 13, '2002-11-29', 'F', 'AB+-', 'calicut', 76, 'malayalam', 'hindu', 2, '21/a ', 'prince apartments', 'calicut', 'kerala', '673636', 76, '9874562341', '9865432923', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00', 0, NULL, 1),
(3, '3', '', '2012-06-01', 'james', '', 'albert', 15, '2001-11-28', 'M', 'AB+-', 'coimbatore', 76, 'tamil', 'christian', 3, 'shan villa', 'anna nagar', 'chennai', 'tamil nadu', '654765', 76, '9876542345', '9875673451', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00', 0, NULL, 1),
(4, '4', '', '2012-06-14', 'shahul', '', 'ahmed', 14, '1998-09-16', 'M', 'AB+-', 'calicut', 76, 'malayalam', 'muslim', 3, 'ahal villa', 'skyline apartments', 'calicut', 'kerala', '876765', 76, '9865456789', '9876456789', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00', 0, NULL, 1),
(5, '5', '', '2012-06-08', 'amrita', '', 'hameed', 12, '1993-06-08', 'F', 'O+', 'kannur', 76, 'malayalam', 'muslim', 2, 'hass', 'apsara apartments', 'kannur', 'kerala', '574356', 76, '98478246', '87456383', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00', 0, NULL, 1),
(6, '07', '', '1995-06-01', 'gourav', '', 'gupta', 2, '2003-06-04', 'M', 'A+', '', 76, 'kannada', 'hindu', 2, '12/a ', 'skyline apartments', 'banglore', 'karnataka', '745653', 76, '98764635', '97875646', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00', 0, NULL, 1),
(7, '08', '', '2009-06-25', 'nimesh', '', 'sangvi', 4, '2002-06-12', 'M', '', '', 1, '', 'hindu', 2, '21/a', 'sd', 'banglore', 'karnataka', '856653', 76, '9675664', '9786756', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00', 0, NULL, 1),
(8, '09', '', '1995-03-01', 'meenakshi', '', 'agarval', 3, '1991-02-14', 'F', 'A+', 'maharashtra', 76, 'marathi', 'hindu', 2, 'shan villa', '', 'mumbai', 'maharashtra', '74553', 76, '9665576', '9887464', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00', 0, NULL, 1),
(9, '10', '', '2012-06-01', 'savithri', '', 'sharma', 5, '2004-06-01', 'F', 'B+', 'cochin', 76, 'malayalam', 'hindu', 2, 'shan villa', 'anna nagar', 'chennai', 'tamil nadu', '574356', 76, '9665576', '97875646', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00', 0, NULL, 1),
(10, '11', '', '2010-06-16', 'pranav', '', 'james', 6, '2007-06-13', '', '', 'calicut', 1, 'tamil', 'christian', 2, '21/a', 'apsara apartments', 'calicut', 'kerala', '654765', 76, '9865456789', '9786756', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00', 0, NULL, 1),
(11, '12', '', '2012-06-01', 'pratheeksha', '', 'vargheese', 7, '1980-06-13', 'F', 'A+', 'banglore', 76, 'kannada', 'christian', 2, '12/b', 'apsara apartments', 'banglore', 'karnataka', '676543', 76, '9754346512', '9786756', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-08 00:00:00', '2012-06-11 00:00:00', 0, NULL, 1),
(12, '13', '', '2012-06-01', 'mohit', '', 'alexander', 1, '2004-06-01', 'M', 'A-', 'delhi', 76, 'hindi', 'christian', 2, '12/b', 'prince apartments', 'delhi', 'hariyana', '654765', 76, '9754346512', '87456383', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00', 0, NULL, 1),
(13, '14', '', '2012-05-01', 'hameed', '', 'ansari', 1, '2004-06-11', 'M', '', 'calicut', 76, 'malayalam', 'muslim', 2, 'shan villa', 'prince apartments', 'calicut', 'kerala', '574356', 76, '9754346512', '87456383', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00', 0, NULL, 1),
(14, '15', '', '2012-05-17', 'rafeeq', '', 'ahamed', 7, '2003-06-04', 'M', 'B+', 'cochin', 76, 'malayalam', 'muslim', 2, '12/b', 'prince apartments', 'cochin', 'kerala', '673636', 76, '9675664', '9865432923', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00', 0, NULL, 1),
(15, '16', '', '2012-04-10', 'bhavana', '', 'sharma', 10, '1993-06-08', 'F', '', 'cochin', 1, 'kannada', 'christian', 2, 'ahal villa', 'anna nagar', 'chennai', 'tamil nadu', '673636', 76, '98478246', '9865432923', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00', 0, NULL, 1),
(16, '17', '', '2012-05-16', 'goutham', '', 'prakash', 11, '1993-06-08', 'M', '', 'calicut', 76, '', 'hindu', 2, '21/a', 'skyline apartments', 'calicut', 'kerala', '676543', 76, '9675664', '9786756', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00', 0, NULL, 1),
(17, '18', '', '2012-05-16', 'mohit', '', 'manohar', 14, '2001-06-14', 'M', 'AB+-', 'coimbatore', 76, 'tamil', 'hindu', 3, 'ahal villa', 'anna nagar', 'chennai', 'tamil nadu', '654765', 76, '9675664', '9786756', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00', 0, NULL, 1),
(18, '19', '', '2012-04-11', 'chandni', '', 'chandran', 14, '1997-06-12', 'F', 'AB+-', '', 76, '', '', 3, '21/a', 'skyline apartments', 'chennai', 'tamil nadu', '673636', 76, '9754346512', '9865432923', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-08 00:00:00', '2012-06-08 00:00:00', 0, NULL, 1),
(19, '20', '', '2012-06-13', 'sanjuktha', '', 'shekhar', 1, '2005-06-01', 'F', 'B+', 'calicut', 76, 'malayalam', 'hindu', 2, 'ahal villa', 'anna nagar', 'chennai', 'tamil nadu', '654765', 76, '9754346512', '87456383', '', 1, 1, NULL, NULL, '', '', 1, 0, '2012-06-12 00:00:00', '2012-06-12 00:00:00', 0, NULL, 1);

--
-- Dumping data for table `students_subjects`
--


--
-- Dumping data for table `student_additional_details`
--


--
-- Dumping data for table `student_additional_fields`
--


--
-- Dumping data for table `student_attentance`
--

INSERT INTO `student_attentance` (`id`, `student_id`, `date`, `reason`) VALUES
(1, 1, '2012-06-08', 'fever'),
(2, 1, '2012-06-12', 'fever');

--
-- Dumping data for table `student_categories`
--

INSERT INTO `student_categories` (`id`, `name`, `is_deleted`) VALUES
(1, 'KG', 0),
(2, 'LP', 0),
(3, 'UP', 0),
(4, 'HS', 0),
(5, 'HSS', 0);

--
-- Dumping data for table `student_extra`
--


--
-- Dumping data for table `student_previous_datas`
--

INSERT INTO `student_previous_datas` (`id`, `student_id`, `institution`, `year`, `course`, `total_mark`) VALUES
(1, 1, 'sver', 's2323', 'wgwet', 'f2324'),
(2, 1, '', '', '', ''),
(3, 2, '', '', '', ''),
(4, 3, 'st.josephs lp school', '2011', '4th', '465'),
(5, 4, 'iss emlps', '2011', '4th', '544'),
(6, 5, '', '', '', ''),
(7, 6, '', '', '', ''),
(8, 7, '', '', '', ''),
(9, 8, '', '', '', ''),
(10, 9, '', '', '', ''),
(11, 11, '', '', '', ''),
(12, 14, '', '', '', ''),
(13, 15, '', '', '', ''),
(14, 16, '', '', '', ''),
(15, 17, '', '', '', ''),
(16, 18, '', '', '', ''),
(17, 19, '', '', '', '');

--
-- Dumping data for table `student_previous_subject_marks`
--


--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `code`, `batch_id`, `no_exams`, `max_weekly_classes`, `elective_group_id`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'english', '01', 1, 0, 5, 0, 0, '0000-00-00 00:00:00', NULL),
(2, 'physics', '02', 1, 0, 4, 0, 0, '0000-00-00 00:00:00', NULL),
(3, 'chemistry', '03', 1, 0, 6, 0, 0, '0000-00-00 00:00:00', NULL),
(4, 'biology', '04', 1, 0, 4, 0, 0, '0000-00-00 00:00:00', NULL),
(5, 'maths', '05', 1, 0, 7, 0, 0, '0000-00-00 00:00:00', NULL),
(6, 'english', '01', 2, 0, 5, 0, 0, '0000-00-00 00:00:00', NULL),
(7, 'physics', '02', 2, 0, 6, 0, 0, '0000-00-00 00:00:00', NULL),
(8, 'chemistry', '03', 2, 0, 7, 0, 0, '0000-00-00 00:00:00', NULL),
(9, 'biology', '04', 2, 0, 5, 0, 0, '0000-00-00 00:00:00', NULL),
(10, 'maths', '05', 2, 0, 6, 0, 0, '0000-00-00 00:00:00', NULL),
(11, 'maths', '05', 9, 0, 6, 0, 0, '0000-00-00 00:00:00', NULL),
(12, 'biology', '04', 9, 0, 5, 0, 0, '0000-00-00 00:00:00', NULL),
(13, 'chemistry', '03', 9, 0, 7, 0, 0, '0000-00-00 00:00:00', NULL),
(14, 'english', '01', 9, 0, 5, 0, 0, '0000-00-00 00:00:00', NULL),
(15, 'physics', '02', 9, 0, 3, 0, 0, '0000-00-00 00:00:00', NULL),
(16, 'physics', '02', 8, 0, 5, 0, 0, '0000-00-00 00:00:00', NULL),
(17, 'english', '01', 8, 0, 6, 0, 0, '0000-00-00 00:00:00', NULL),
(18, 'maths', '05', 8, 0, 7, 0, 0, '0000-00-00 00:00:00', NULL),
(19, 'biology', '04', 8, 0, 3, 0, 0, '0000-00-00 00:00:00', NULL),
(20, 'chemistry', '03', 8, 0, 4, 0, 0, '0000-00-00 00:00:00', NULL),
(21, 'english', '01', 7, 0, 3, 0, 0, '0000-00-00 00:00:00', NULL),
(22, 'physics', '02', 7, 0, 5, 0, 0, '0000-00-00 00:00:00', NULL),
(23, 'chemistry', '03', 7, 0, 6, 0, 0, '0000-00-00 00:00:00', NULL),
(24, 'biology', '04', 7, 0, 5, 0, 0, '0000-00-00 00:00:00', NULL),
(25, 'maths', '05', 7, 0, 6, 0, 0, '0000-00-00 00:00:00', NULL),
(26, 'physics', '02', 3, 0, 6, 0, 0, '0000-00-00 00:00:00', NULL),
(27, 'english', '01', 3, 0, 5, 0, 0, '0000-00-00 00:00:00', NULL),
(28, 'chemistry', '03', 3, 0, 6, 0, 0, '0000-00-00 00:00:00', NULL),
(29, 'maths', '05', 3, 0, 7, 0, 0, '0000-00-00 00:00:00', NULL),
(30, 'biology', '04', 3, 0, 4, 0, 0, '0000-00-00 00:00:00', NULL),
(31, 'computer', '06', 2, 0, 5, 0, 0, '0000-00-00 00:00:00', NULL);

--
-- Dumping data for table `subject_name`
--

INSERT INTO `subject_name` (`id`, `name`, `code`) VALUES
(1, 'english', '01'),
(2, 'physics', '02'),
(3, 'chemistry', '03'),
(4, 'biology', '04'),
(5, 'maths', '05'),
(6, 'computer', '06'),
(7, 'history', '07');

--
-- Dumping data for table `timetable_entries`
--

INSERT INTO `timetable_entries` (`id`, `batch_id`, `weekday_id`, `class_timing_id`, `subject_id`, `employee_id`) VALUES
(1, 1, 3, 1, 1, 1),
(2, 1, 2, 1, 1, 2),
(3, 1, 3, 2, 2, 6),
(4, 1, 2, 2, 3, 5),
(5, 1, 3, 3, 5, 4),
(6, 1, 2, 3, 2, 6),
(7, 1, 3, 4, 3, 5),
(8, 1, 4, 1, 1, 2),
(9, 1, 5, 1, 1, 4),
(10, 1, 6, 1, 1, 2),
(11, 1, 4, 2, 2, 6),
(12, 1, 5, 2, 2, 5),
(13, 1, 6, 2, 3, 5),
(14, 1, 4, 3, 1, 4),
(15, 1, 5, 3, 3, 5),
(16, 1, 6, 3, 2, 5),
(17, 1, 2, 4, 3, 5),
(18, 1, 4, 4, 5, 4),
(19, 1, 5, 4, 5, 4),
(20, 1, 6, 4, 1, 4),
(21, 1, 3, 5, 1, 4),
(22, 2, 3, 8, 6, 4),
(23, 2, 2, 8, 8, 4),
(24, 1, 3, 7, 2, 5),
(25, 1, 2, 7, 3, 5),
(26, 1, 3, 6, 2, 6),
(27, 2, 3, 9, 8, 6);

--
-- Dumping data for table `user`
--


--
-- Dumping data for table `userfolder`
--


--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `admin`, `student`, `employee`, `hashed_password`, `salt`, `reset_password_code`, `reset_password_code_until`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Fedena', 'Administrator', 'noreplyadmin@fedena.com', 1, 0, 0, 'a90e9625a53228c32f159421f1283baf5fa77fba', 'atboV9Pj', NULL, NULL, '2012-02-20 13:41:13', '2012-02-20 13:41:13'),
(2, 'matt', 'Matt', 'George', 'matt@live.com', 1, 0, 0, '340b076432aed91bbc7492c863db2ef0c0d2fcb9', '1eLrHDli', NULL, NULL, '2012-02-21 04:38:45', '2012-02-21 04:38:45');

--
-- Dumping data for table `user_details`
--


--
-- Dumping data for table `user_events`
--


--
-- Dumping data for table `weekdays`
--

INSERT INTO `weekdays` (`id`, `batch_id`, `weekday`) VALUES
(22, 2, '0'),
(23, 2, '2'),
(24, 2, '3'),
(25, 2, '4'),
(26, 2, '5'),
(27, 2, '6'),
(28, 2, '7'),
(85, NULL, '1'),
(86, NULL, '2'),
(87, NULL, '3'),
(88, NULL, '4'),
(89, NULL, '5'),
(90, NULL, '6'),
(91, NULL, '7'),
(99, 1, '0'),
(100, 1, '2'),
(101, 1, '3'),
(102, 1, '4'),
(103, 1, '5'),
(104, 1, '6'),
(105, 1, '0');
