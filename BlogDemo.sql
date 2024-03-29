USE [test1]
GO
/****** Object:  User [sandy123]    Script Date: 2023/4/17 上午 11:28:10 ******/
CREATE USER [sandy123] WITHOUT LOGIN WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  Table [dbo].[basic_information]    Script Date: 2023/4/17 上午 11:28:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[basic_information](
	[department] [nvarchar](20) NULL,
	[grade] [nvarchar](20) NULL,
	[id1] [nvarchar](20) NOT NULL,
	[name] [nvarchar](50) NULL,
	[sex] [nvarchar](200) NULL,
	[id_number] [nvarchar](20) NULL,
	[birth_year] [nvarchar](20) NULL,
	[birth_month] [nvarchar](20) NULL,
	[birthday] [nvarchar](20) NULL,
	[mail] [nvarchar](200) NULL,
	[tel] [nvarchar](20) NULL,
PRIMARY KEY CLUSTERED 
(
	[id1] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[achievement]    Script Date: 2023/4/17 上午 11:28:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[achievement](
	[id1] [nvarchar](20) NULL,
	[academic_performance1] [nvarchar](20) NULL,
	[academic_performance2] [nvarchar](20) NULL,
	[performance1] [nvarchar](20) NULL,
	[performance2] [nvarchar](20) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[family_profile]    Script Date: 2023/4/17 上午 11:28:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[family_profile](
	[id1] [nvarchar](20) NULL,
	[family_size] [nvarchar](20) NULL,
	[number_of_students] [nvarchar](20) NULL,
	[number_of_employees] [nvarchar](20) NULL,
	[parent_Career] [nvarchar](20) NULL,
	[income_situation] [nvarchar](20) NULL,
	[other] [nvarchar](20) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[study_qualification]    Script Date: 2023/4/17 上午 11:28:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[study_qualification](
	[id1] [nvarchar](20) NULL,
	[time] [nvarchar](20) NULL,
	[unit] [nvarchar](20) NULL,
	[expertise] [nvarchar](20) NULL,
	[application_form] [nvarchar](20) NULL,
	[signature] [nvarchar](20) NULL
) ON [PRIMARY]
GO
/****** Object:  View [dbo].[apple]    Script Date: 2023/4/17 上午 11:28:10 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create view [dbo].[apple] as 
select department,grade,basic_information.id1,name,sex,id_number,birth_year,birth_month,birthday,mail,tel,academic_performance1,academic_performance2,performance1,performance2,family_size,number_of_students,number_of_employees,parent_Career,income_situation,other,time,unit,expertise,application_form,signature from (basic_information join achievement on basic_information.id1=achievement.id1) 
join family_profile on basic_information.id1=family_profile.id1 
join study_qualification on basic_information.id1=study_qualification.id1
GO
ALTER TABLE [dbo].[achievement]  WITH CHECK ADD FOREIGN KEY([id1])
REFERENCES [dbo].[basic_information] ([id1])
GO
ALTER TABLE [dbo].[family_profile]  WITH CHECK ADD FOREIGN KEY([id1])
REFERENCES [dbo].[basic_information] ([id1])
GO
ALTER TABLE [dbo].[study_qualification]  WITH CHECK ADD FOREIGN KEY([id1])
REFERENCES [dbo].[basic_information] ([id1])
GO
