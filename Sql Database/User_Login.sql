USE [Test]
GO
/****** Object:  Table [dbo].[User_Login]    Script Date: 23.12.2018 22:02:24 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[User_Login](
	[userid] [int] IDENTITY(1,1) NOT NULL,
	[username] [varchar](10) NULL,
	[userpassword] [varchar](10) NULL,
	[tc] [varchar](10) NULL,
PRIMARY KEY CLUSTERED 
(
	[userid] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[User_Login] ON 

INSERT [dbo].[User_Login] ([userid], [username], [userpassword], [tc]) VALUES (1, N'admin', N'admin', N'10')
SET IDENTITY_INSERT [dbo].[User_Login] OFF
